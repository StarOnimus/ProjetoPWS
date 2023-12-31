<?php
require './vendor/autoload.php';
const APP_NAME = 'Credit App';
const INVALID_ACCESS_ROUTE = 'c=auth&a=login';

ActiveRecord\Config::initialize(function ($cfg) {
    $cfg->set_model_directory('./models');
    $cfg->set_connections(
        array(
            'development' => 'mysql://root@localhost/projetopws',
        )
    );
});