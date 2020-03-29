<?php
require_once 'Config.class.php';

$conf = new Config();

$conf->root_path = dirname(__FILE__);
// dlatego, że korzystam z MAMP używam portu 8888
$conf->server_name = 'localhost:8888';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/Spalanie';
$conf->app_url = $conf->server_url.$conf->app_root;
?>
