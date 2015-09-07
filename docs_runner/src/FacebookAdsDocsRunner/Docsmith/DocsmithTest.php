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

namespace FacebookAdsDocsRunner\Docsmith;

use FacebookAds\Http\RequestInterface;
use FacebookAds\Http\Response;
use FacebookAds\Http\ResponseInterface;
use FacebookAds\Object\AbstractCrudObject;
use FacebookAdsDocsRunner\DocRunnerTest;

/**
 * @method DocsmithRunner getRunner()
 */
class DocsmithTest extends DocRunnerTest {

  /**
   * @var string|null
   */
  protected $source;

  /**
   * @var string|null
   */
  protected $processedSource;

  /**
   * @var string
   */
  protected $stubDir = '/tmp/';

  /**
   * @var string
   */
  protected $stubPath;

  /**
   * @param DocsmithRunner $runner
   */
  public function __construct(DocsmithRunner $runner) {
    parent::__construct($runner);
  }

  public function __destruct() {
    if ($this->stubPath !== null) {
      unlink($this->stubPath);
      $this->stubPath = null;
    }
  }

  /**
   * @param string $dir
   */
  public function setStubDir($dir) {
    $this->stubDir = $dir;
  }

  /**
   * @return string
   */
  public function getStubDir() {
    return $this->stubDir;
  }

  /**
   * @param RequestInterface $request
   * @return ResponseInterface
   */
  public function onAdapterSendRequest(RequestInterface $request) {
    $response = new Response();
    $response->setRequest($request);
    $response->setStatusCode(200);
    if ($request->getMethod() === RequestInterface::METHOD_POST) {
      $response->setBody(json_encode(array(
        AbstractCrudObject::FIELD_ID => 1,
      )));
    }

    return $response;
  }

  protected function setupHttpClient() {
    parent::setupHttpClient();
  }

  protected function setupLogger() {
    $this->logger = new DocsmithCurlLogger();
  }

  /**
   * @return string
   */
  public function getSource() {
    if ($this->source === null) {
      $this->source = file_get_contents($this->getDocFilepath());
    }

    return $this->source;
  }

  /**
   * @return string
   */
  protected function getDocsmithInstructionPattern() {
    return '/\n[ \t]*\/\/\s+_DOC\s+(\S+)\s+\[([^]]+)\][^\n]*/';
  }

  /**
   * @param string $argvs
   * @return array
   */
  protected function explodeArgv($argvs) {
    $argv = array();
    foreach (explode(', ', $argvs) as $arg) {
      strlen($arg) > 0 && $argv[] = addslashes($arg);
    }

    return $argv;
  }

  /**
   * @param array $matches
   * @return string
   */
  protected function processDocsmithVarsInstruction(array $matches) {
    $fmt = "\nisset(\$%s) && \$this->getLogger()->addPlaceholder('%s', \$%s);";
    $buffer = '';
    foreach ($this->explodeArgv($matches[2]) as $arg) {
      $varname = preg_replace('/:s$/', '', $arg);
      $buffer .= sprintf($fmt, $varname, $varname, $varname);
    }

    return $buffer;
  }

  /**
   * @param array $matches
   * @return string
   */
  protected function processDocsmithInstruction(array $matches) {
    $fmt = "\n\$this->getLogger()->instruct('%s', array(%s));";
    $argv = array();
    foreach ($this->explodeArgv($matches[2]) as $argc) {
      $argv[] = "'".$argc."'";
    }

    $buffer = sprintf($fmt, $matches[1], implode(', ', $argv));

    if ($matches[1] === 'vars') {
      $buffer .= $this->processDocsmithVarsInstruction($matches);
    }

    return $buffer;
  }

  /**
   * @return string
   */
  public function getProcessedSource() {
    if ($this->processedSource === null) {
      $source = $this->getSource();
      $this->processedSource = preg_replace_callback(
        $this->getDocsmithInstructionPattern(),
        array($this, 'processDocsmithInstruction'),
        $source);
    }

    return $this->processedSource;
  }

  /**
   * @return string
   */
  public function getStubPath() {
    if ($this->stubPath == null) {
      $this->stubPath = $this->getStubDir().hash(
        'sha256',
        (microtime(true).uniqid()).'_'.basename($this->getDocFilepath()));

      if (!is_writable($this->stubDir)) {
        throw new \RuntimeException($this->stubDir.' is not writable');
      } else if (file_exists($this->stubPath)) {
        throw new \RuntimeException('Stub file collision');
      }

      file_put_contents($this->stubPath, $this->getProcessedSource());
    }

    return $this->stubPath;
  }

  public function testDocExample() {
    $config = $this->getConfig();

    require $this->getStubPath();
  }
}
