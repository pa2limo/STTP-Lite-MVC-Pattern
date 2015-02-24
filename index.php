<?php
/**
 * A Very Simple PHP MVC Pattern, based on OOP : require PHP >= 5.4
 *
 * @package php-mvc lite 
 * @author pa2limo
 * @link http://stt-pomosda.ac.id/ or https://github.com/pa2limo/STTP-Lite-MVC-Pattern/new/master
 * @license http://opensource.org/licenses/MIT MIT License
 */

// load application config (error reporting, predefined const etc.)
require 'application/config/config.php';

// load the (optional) Composer auto-loader
if (file_exists('vendor/autoload.php')) {
    require 'vendor/autoload.php';
}

// load main engine application
require 'application/bootapp/boots.php';
require 'application/bootapp/controller.php';
// Load your own custom library
require 'application/addlibs/mylib.php';
require 'application/addlibs/zonkmail.php';
// start the application
$boot = new Boots();
