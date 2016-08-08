<?php

define("PATH", __DIR__);

$config_file = 'app/config/config.php';

// Проверки
if (!is_readable($config_file)){
    die ('Configuraton file not found! Please create  config file in configuration directory!');
}

// Автолоадер
if (!is_readable('app/autoload.php')){
    die ('Autoload file not found! Please git clone repository again.');
}

// Инклюдим конфиг
$config      = include $config_file;
$application = include 'app/autoload.php';


// Пустой конфиг
if (!$config){
    die ("Configuraton file is empty!");
}

// Включим отображение ошибок?
if ($config['debug'] == true){
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}

$application->setExecutableAppPath($config['filename'])
    ->start();
