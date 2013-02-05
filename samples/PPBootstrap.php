		<?php
/**
 *  Include this file in your application 
 *  this file includes autoloader.php if using composer. includes custom actoloader if it is a custom installation of SDK
 */
define('PP_CONFIG_PATH',dirname(__FILE__).'/../config/');
if(file_exists(dirname(__FILE__).'/vendor/autoload.php'))
    require 'vendor/autoload.php';

else
{
    require 'PPAutoloader.php';
    PPAutoloader::register();
}
	