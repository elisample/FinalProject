<?php
/**
 * Author: Aiden Eichenour
 * date: 11/14/22
 * File: index.php
 * Description: Final Project- One Stop Sausage. index page
 */

//Load application settings
require_once ('application/config.php');

//Load the autoloader
require_once ('vendor/autoload.php');

//Load the dispatcher class
new Dispatcher();
