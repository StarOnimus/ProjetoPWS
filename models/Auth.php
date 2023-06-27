<?php
require_once 'models/User.php';
class Auth
{
    function __construct(){
        session_start();
    }

    function CheckAuth($username, $password) {
        $user = User::all();
        foreach ($user as $u) {
            if ($u->username == $username and $u->password == $password){
                $_SESSION[$username] = $username;
                if ($u->role == 'admin'){
                    return 1;
                } else{
                    return 2;
                }
            }else{
                return 0;
            }
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