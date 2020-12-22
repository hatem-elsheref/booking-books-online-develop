<?php
// General
define('APP_NAME','SHEFOO');

// Database Configuration
define('DB_HOST','localhost');
define('DB_USER','hatem');
define('DB_PASS','webserver');
define('DB_NAME','system');
define('DB_PORT',3306);

// Application Paths
define('ROOT_PATH',dirname(__FILE__,3));
define('APP_PATH',ROOT_PATH.DS.'app');
define('APP_HELPERS_PATH',APP_PATH.DS.'helpers');
define('APP_MODELS_PATH',APP_PATH.DS.'models');
define('APP_VIEWS_PATH',APP_PATH.DS.'views');
define('APP_TEMPLATE_PATH',APP_PATH.DS.'template');
define('_404_',APP_VIEWS_PATH.DS.'404.php');

// Application Urls
define('APP_PORT',2020);
define('DASHBOARD','admin');
define('APP_URL','http://www.localhost:'.APP_PORT);
define('ADMIN_URL','http://www.localhost:'.APP_PORT.'/'.DASHBOARD);


require_once __DIR__.DS.'Request.php';
require_once __DIR__.DS.'Database.php';
require_once __DIR__.DS.'routes.php';
require_once APP_HELPERS_PATH.DS.'paths.php';
require_once APP_HELPERS_PATH.DS.'main.php';

