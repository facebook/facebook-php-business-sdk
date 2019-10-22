<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAds;

use FacebookAds\Api;

/**
 * Class CrashReporter
 * @package FacebookAds
 */
class CrashReporter {

    /**
     * @var CrashReporter
     */
    private static $instance;

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
        if (!static::$instance) {
            $api = Api::instance();
            if ($api == null) {
              print('CrashReporter: Could not initialize API' . PHP_EOL);
            }
            static::$instance = new static($api->getSession()->getAppId());
            static::$instance->registerExceptionHandler();
            print('CrashReporter: Enabled' . PHP_EOL);
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
            print('CrashReporter: Disabled' . PHP_EOL);
        }
    }

    /**
     * @return void
     */
    private function registerExceptionHandler() {
        $lastHandler = set_exception_handler(
            function (\Exception $e) use (&$lastHandler) {
                print('CrashReporter: Exception detected!' . PHP_EOL);
                // send back to server

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
                print('CrashReporter: Error detected!' . PHP_EOL);
                // send back to server

                if (is_callable($lastError)) {
                    return call_user_func_array($lastError, [$errno, $errstr, $errfile, $errline]);
                } else {
                    // fall through to the standard PHP error handler
                    return false;
                }
            }
        );
    }
}
