<?php
class Auth
{
    function __construct(){
        session_start();
    }

    function CheckAuth($username, $password) {
        if ($username == "max@max" and $password == "123"){
            $_SESSION[$username] = $username;
            return true;
        }
        else{
            return false;
        }
    }

    function isLoggedIn($user) {
        if (isset($_SESSION[$user])){
            return true;
        }
        else{
            return false;
        }
    }

    function Logout() {
        session_destroy();
    }
}