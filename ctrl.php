<?php
require_once 'init.php';

getConf()->login_action = 'login';

switch ($action) {
    default :
        control('', 'CalcCtrl','generateView', ['user','admin']);
    case 'login':
        control('', 'LoginCtrl','doLogin');
    case 'calcCompute' :
        control('', 'CalcCtrl', 'process', ['user','admin']);
    case 'logout' :
        control('', 'LoginCtrl', 'doLogout',	['user','admin']);
}
