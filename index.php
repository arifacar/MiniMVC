<?php

/**
 * MiniMVC
 * 
 * MiniMVC is an MVC (Model-View-Controller) application framework for PHP.
 * 
 * No restrictive coding rules
 * Simple solutions over complexity
 * No large-scale monolithic libraries
 * Nearly zero configuration
 * No need for template language
 * Spend more time away from the computer
 * PHP >= 5.5.9
 * PDO PHP Extension
 * 
 * 
 * @package	MiniMVC
 * @author	Arif Acar
 * @copyright	Copyright (c) 2015 - 2017, Arif Acar. (http://www.arifacar.com/)
 * @link	http://bitly.com/MiniMVC
 * @since	Version 1.1.4
 * @filesource
 */

ob_start();

define('BASEPATH', 'MINIMVC');

/**
 * You can define this function to enable classes autoloading. Name of the class to load.
 * 
 * Include all php files on system/libs/ folder.
 * 
 * @param type $className
 */
function __autoload($className) { // Belirlenen klasordeki tum php dosyalarini otomatik olarak iclude ediyoruz.
    include_once "system/libs/" . $className . ".php";
}

/**
 * Include your configration file.
 */
include_once "app/config/config.php";

$parser = new URLParser();

ob_flush();
?>

