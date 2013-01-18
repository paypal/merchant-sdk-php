<?php
$configPath =  dirname(__FILE__).'/../config/';
define('PP_CONFIG_PATH',$configPath);
echo PP_CONFIG_PATH;
if(file_exists('vendor/autoload.php'))
    require 'vendor/autoload.php';

else
{
    require '/../PPAutoloader.php';
    PPAutoloader::register();
}