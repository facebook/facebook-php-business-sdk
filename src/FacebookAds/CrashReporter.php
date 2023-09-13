<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds;

use FacebookAds\Api;
use FacebookAds\Exception\Exception;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\Exception\RequestException;

/**
 * Class CrashReasons
 * @package FacebookAds
 */
class CrashReasons {
    const SDK = 'SDK';
    const API = 'API';
}

/**
 * Class CrashReporter
 * @package FacebookAds
 */
class CrashReporter {
    const E_FATAL =
      E_ERROR |
      E_USER_ERROR |
      E_PARSE |
      E_CORE_ERROR |
      E_COMPILE_ERROR |
      E_RECOVERABLE_ERROR;

    /**
     * @var CrashReporter
     */
    private static $instance;

    /**
     * @var resource
     */
    private static $handle;

    /**
     * @var int
     */
    private $app_id;

    /**
     * CrashReporter constructor.
     * @param int $app_id
     * @return void
     */
    private function __construct(
      $app_id
    ) {
        $this->app_id = $app_id;
    }

    /**
     * @return void
     */
    public static function enable() {
        if (!static::$handle) {
          static::$handle = fopen('php://stdout', 'w');
        }
        if (!static::$instance) {
            $api = Api::instance();
            if ($api == null) {
              self::log('Could not initialize API' . PHP_EOL);
            }
            static::$instance = new static($api->getSession()->getAppId());
            static::$instance->registerExceptionHandler();
            self::log('Enabled' . PHP_EOL);
        }
    }

    /**
     * @return void
     */
    public static function disable() {
        if (static::$instance) {
            static::$instance = null;
            restore_exception_handler();
            restore_error_handler();
            self::log('Disabled');
        }
    }

    /**
     * @param $handle
     */
    public static function setLogger($handle) {
        if(is_resource($handle)) {
          static::$handle  = $handle;
        }
    }

    /**
     * @return void
     */
    private function registerExceptionHandler() {
        $lastHandler = set_exception_handler(
            function (\Throwable $e) use (&$lastHandler) {
                self::log('Exception detected!');
                $params = $this->buildParamsFromException($e);
                if ($params != null) {
                    $this->sendReport(array(
                        'bizsdk_crash_report' => $params
                    ));
                }
                // restore the previous exception
                if (is_callable($lastHandler)) {
                    return call_user_func_array($lastHandler, [$e]);
                } else {
                    throw $e;
                }
            }
        );

        $lastError = set_error_handler(
            function ($errno, $errstr, $errfile, $errline) use (&$lastError) {
                if (($errno & self::E_FATAL) && strpos($errfile, 'FacebookAds') != false) {
                    self::log('Error detected!');
                    $e = new \ErrorException($errstr, 0, $errno, $errfile, $errline);
                    $params = $this->buildParamsFromException($e);
                    if ($params != null) {
                        $this->sendReport(array(
                            'bizsdk_crash_report' => $params
                        ));
                    }
                }
                if (is_callable($lastError)) {
                    return call_user_func_array($lastError, [$errno, $errstr, $errfile, $errline]);
                } else {
                    // fall through to the standard PHP error handler
                    return false;
                }
            }
        );
    }

    /**
     * @param \Throwable $e
     * @return array|null
     */
    private function buildParamsFromException(\Throwable $e) {
        if (!($e instanceof Exception || $e instanceof \ErrorException)) {
            return NULL;
        }
        $reason = CrashReasons::SDK;
        if ($e instanceof RequestException) {
            $reason = CrashReasons::API;
        }
        $reason .= ' : ' . $e->getMessage();
        $callstack = explode(PHP_EOL, $e->getTraceAsString());
        return array(
            'reason' => $reason,
            'callstack' => $callstack,
            'platform' => phpversion()
        );
    }

    /**
     * @param $params
     */
    private function sendReport($params) {
        try {
            $session = new AnonymousSession();
            $api = new Api(Api::instance()->getHttpClient(), $session);
            $request = $api->prepareRequest(
                '/' . $this->app_id . '/instruments',
                RequestInterface::METHOD_POST,
                $params
            );

            $response = $api->executeRequest($request);
            $data = $response->getContent();
            if ($data && $data['success']) {
                self::log('Successfully sent report' . PHP_EOL);
            } else {
                self::log('Failed to send report' . PHP_EOL);
            }
        } catch (\Exception $e) {
            self::log('Exception on sending report' . PHP_EOL);
        }
    }

    /**
     * @param $message
     */
    private static function log($message) {
      $content = sprintf("%s : %s%s",static::class, $message, PHP_EOL);
      fwrite(static::$handle, $content);
    }
}
