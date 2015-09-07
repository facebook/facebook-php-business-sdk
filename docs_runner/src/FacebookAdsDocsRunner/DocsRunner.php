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

namespace FacebookAdsDocsRunner;

class DocsRunner {

  /**
   * @var int
   */
  protected $argc;

  /**
   * @var string[]
   */
  protected $argv;

  /**
   * @var string
   */
  protected $relativePath = __DIR__;

  /**
   * @var string
   */
  protected $docFilepath;

  /**
   * @var \PHPUnit_TextUI_TestRunner
   */
  protected $testRunner;

  /**
   * @var ResultPrinter
   */
  protected $printer;

  /**
   * @var \PHPUnit_Framework_TestSuite
   */
  protected $testSuite;

  public static function printUsage() {
    echo "Usage: docs_runner <PATH_TO_EXAMPLE_FILE>\n";
  }

  /**
   * @param int $argc
   * @param array $argv
   */
  public function __construct($argc, array $argv) {
    $this->argc = $argc;
    $this->argv = $argv;

    if ($argc < 2) {
      static::printUsage();
      exit();
    }
    $this->docFilepath = $argv[1];
  }

  /**
   * @return string
   */
  public function getRelativePath() {
    return $this->relativePath;
  }

  /**
   * @param string $relative_path
   */
  public function setRelativePath($relative_path) {
    $this->relativePath = $relative_path;
  }

  /**
   * @return string
   */
  public function getDocFilepath() {
    return $this->docFilepath;
  }

  /**
   * @return string
   */
  public function getAbsoluteDocFilepath() {
    return $this->getRelativePath().DIRECTORY_SEPARATOR.$this->getDocFilepath();
  }

  /**
   * @param string $doc_filepath
   */
  public function setDocFilepath($doc_filepath) {
    $this->docFilepath = $doc_filepath;
  }

  /**
   * @return \PHPUnit_TextUI_TestRunner
   */
  public function getTestRunner() {
    if ($this->testRunner === null) {
      $this->testRunner = new \PHPUnit_TextUI_TestRunner();
      $this->testRunner->setPrinter($this->getPrinter());
    }

    return $this->testRunner;
  }

  /**
   * @return ResultPrinter
   */
  public function getPrinter() {
    if ($this->printer === null) {
      $this->printer = new ResultPrinter();
    }

    return $this->printer;
  }

  /**
   * @return \PHPUnit_Framework_TestSuite
   */
  public function getTestSuite() {
    if ($this->testSuite === null) {
      $this->testSuite = new \PHPUnit_Framework_TestSuite();
    }

    return $this->testSuite;
  }

  /**
   * @return DocRunnerTest
   */
  protected function createTestCase() {
    return new DocRunnerTest($this);
  }

  /**
   * @return int
   */
  public function run() {
    DocRunnerTest::setupBeforeClass();

    $this->getTestSuite()->addTest($this->createTestCase());

    $result = null;

    try {
      $result = $this->getTestRunner()->doRun(
        $this->getTestSuite());
    } catch (\Exception $e) {
      print $e->getMessage()."\n";
    }

    DocRunnerTest::tearDownAfterClass();

    if ($result === null) {
      return \PHPUnit_TextUI_TestRunner::EXCEPTION_EXIT;
    }

    return $result->wasSuccessful()
      ? \PHPUnit_TextUI_TestRunner::SUCCESS_EXIT
      : \PHPUnit_TextUI_TestRunner::FAILURE_EXIT;
  }
}
