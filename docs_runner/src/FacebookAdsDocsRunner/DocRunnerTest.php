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

use FacebookAdsTest\AbstractIntegrationTestCase;

class DocRunnerTest extends AbstractIntegrationTestCase {

  /**
   * @var DocsRunner
   */
  protected $runner;

  /**
   * @param DocsRunner $runner
   */
  public function __construct(DocsRunner $runner) {
    parent::__construct('testDocExample');

    $this->runner = $runner;

    if (!file_exists($runner->getAbsoluteDocFilepath())) {
      throw new \InvalidArgumentException(
        'Document file not found: '.$runner->getAbsoluteDocFilepath());
    }
  }

  /**
   * @return DocsRunner
   */
  public function getRunner() {
    return $this->runner;
  }

  /**
   * @return string
   */
  public function getDocFilepath() {
    return $this->getRunner()->getAbsoluteDocFilepath();
  }

  public function testDocExample() {
    $config = $this->getConfig();

    require_once($this->getDocFilepath());
  }
}
