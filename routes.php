<?php
require_once 'controllers/BOController.php';
require_once 'controllers/LoginController.php';

return [
    'defaultRoute' => ['GET', 'LoginController', 'index'],
    'bo' => [
        'index' => ['GET','BOController','index'],
    ],
    'login' => [
        'index' => ['GET','LoginController','index'],
        'login' => ['POST','LoginController','login']
    ],
]
?>