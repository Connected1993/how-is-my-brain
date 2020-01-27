<?php


//Корень проекта там где лежит  global_pass.php       
define('PROJECT_ROOT', __DIR__);

//подключаем отображение ошибок
//include_once(PROJECT_ROOT.'/errors.php');

//Формируем URL
$isHttps = !empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS']);
($isHttps) ? $protocol = 'https' : $protocol = 'http';
$parts = explode($_SERVER['HTTP_HOST'],__DIR__);
$folder = array_pop($parts);
define('PROJECT_URL',$protocol.'://'.$_SERVER['HTTP_HOST'].$folder);


//Записываем пассы в константы
define("DB_HOST", 'localhost');
define("DB_NAME", 'sasha');
define("DB_USER", 'sasha');
define("DB_PASSWORD", 'qwe123098');



//Для процедурки
$pdo = new \PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
$pdo->exec("set names utf8");

//для использования классов
require_once(PROJECT_ROOT.'/system/classes/autoload.php');


