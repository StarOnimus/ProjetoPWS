<?php
require_once 'controllers/Controller.php';
require_once 'models/Auth.php';
class LoginController extends Controller
{
    function index(){
        $this->renderView('login', 'index', [], 'login');
    }

    function login(){
        $username = $this->getHTTPPostParam('utilizador');
        $password = $this->getHTTPPostParam('senha');

        $auth = new Auth();
        if ($auth->checkauth($username,$password) == 1) {
            $this->redirectToRoute('bo','index');
        } else {
            $this->renderView('login', 'index', [], 'login');

        }
    }
}