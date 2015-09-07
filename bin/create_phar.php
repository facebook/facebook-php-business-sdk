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

namespace FacebookAdsBin;

use Symfony\Component\Finder\Finder;

chdir(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR);

require_once 'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

// Options
$include_autoloader = !in_array('--no-autoloader', $_SERVER['argv']);
$compress_gzip = !in_array('--no-gzip', $_SERVER['argv']);

$alias = 'facebook-php-ads-sdk.phar';
$build_dir = '.'.DIRECTORY_SEPARATOR.'builds'.DIRECTORY_SEPARATOR;
$out = $build_dir.$alias;

if (!is_dir($build_dir)) {
  mkdir($build_dir);
} else if (file_exists($out)) {
  unlink($out);
}

$phar = new \Phar($out, 0, $alias);
$phar->setSignatureAlgorithm(\Phar::SHA1);
if ($compress_gzip) {
  $phar->compressFiles(\Phar::GZ);
}
$phar->startBuffering();
$phar->addFile('LICENSE');

$finder = (new Finder())->files()
  ->ignoreVCS(true)
  ->name('*.php')
  ->in('src');

foreach ($finder->getIterator() as $file) {
  $phar->addFile($file);
}

$stub = <<<'EOF'
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
Phar::mapPhar('%s');

if (%d) {
  spl_autoload_register(function($class) {
    $prefix = 'FacebookAds\\';
    $base_dir = 'phar://%s/src/FacebookAds/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
      return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir.str_replace(
      '\\', DIRECTORY_SEPARATOR, $relative_class).'.php';
    if (file_exists($file)) {
      require $file;
    }
  });
}

__HALT_COMPILER();
EOF;


$phar->setStub(sprintf($stub, $alias, $include_autoloader ? 1 : 0, $alias));
$phar->stopBuffering();
