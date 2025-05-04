<?php
/**
 * Plugin Name: Public Reporting SLiMS
 * Plugin URI: https://github.com/erwansetyobudi/public-reporting-slims
 * Description: Plugin berfungsi menampilakn pelaporan Perpustakaan untuk khalayak umum
 * Version: 1.0.0
 * Author: Erwan Setyo Budi
 * Author URI: Erwan Setyo Budi
 */

use SLiMS\DB;
use SLiMS\Plugins;
use SLiMS\Url;
use SLiMS\Table\Schema;

define('MSLR', __DIR__);

define('MSWB', (string)Url::getSlimsBaseUri('plugins/' . basename(MSLR) . '/'));

// load helper
include_once __DIR__ . DS . 'helper.php';

// get plugin instance
$plugin = Plugins::getInstance();

// registering menus
$plugins->registerMenu('opac', 'Public Reporting', __DIR__ . '/pages/public_reporting.inc.php');
