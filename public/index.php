<?php

session_start();
define('DS',DIRECTORY_SEPARATOR);
require_once realpath(dirname(__FILE__,2)) . DS . 'app' . DS . 'config' . DS . 'config.php';

$request=new Request($_GET,$_POST);
$connectionHandler=(new Database(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT))->openConnection();

$defaultPage=strtolower($request->get('page','get') ?? 'home');
$defaultAction=strtolower($request->get('action','get') ?? 'index');
$defaultFolder=explode('?',$_SERVER['REQUEST_URI'])[0] == '/'.DASHBOARD?'back':'front';

$model=APP_MODELS_PATH.DS.$defaultFolder.DS.str_replace('@',DS,$defaultPage).'.model.php';
$view =APP_VIEWS_PATH.DS.$defaultFolder.DS.str_replace('@',DS,$defaultPage).'.view.php';


if (!file_exists($model) and !file_exists($view)){
    redirect('404.php');
}

if (file_exists($model)) require_once $model;


require_once APP_VIEWS_PATH.DS.'layouts'.DS.$defaultFolder.'-master.layout.php';


