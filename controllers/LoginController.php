<?php
require_once 'controllers/Controller.php';
require_once 'models/Auth.php';
require_once 'models/User.php';
class LoginController extends Controller
{
    function index(){
        $this->renderView('login', 'index', [], 'login');
    }

    function login(){
        $username = $this->getHTTPPostParam('utilizador');
        $password = $this->getHTTPPostParam('senha');

        $auth = new Auth();
        $user = User::find($username);
        if ($auth->checkauth($username,$password)) {
            $this->redirectToRoute('bo','index');
        } else {
            $this->renderView('login', 'index', [], 'login');

        }
    }
}