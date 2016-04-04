<?php
/*
 * Piwik cache init
 */
include 'bootstrap.php';

use DeviceDetector\DeviceDetector;
use Doctrine\Common\Cache;

/*
 * File
 */
$cache = new Cache\PhpFileCache('../myCache/.tmp/piwik');

$dd = new DeviceDetector();
$dd->setCache($cache);
$dd->setUserAgent('test');
$dd->parse();
