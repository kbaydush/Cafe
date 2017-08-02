<?php
/**
 * {license_notice}
 *
 * @copyright   {copyright}
 * @license     {license_link}
 */

use cafe\Autoloader;
use Composer\Autoload;

define('ROOT_DIR', dirname(__FILE__));
// init autoloader
$composer_load = require_once(ROOT_DIR . '/plugins/autoload.php');

$loader = new Autoloader();
$loader->addNamespace("cafe", realpath(ROOT_DIR . DIRECTORY_SEPARATOR . "classes" . DIRECTORY_SEPARATOR));
$loader->register();
