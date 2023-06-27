<?php
require_once 'controllers/Controller.php';
class BOController extends Controller
{
    function index(){
        $this->renderView('bo', 'index');
    }

}