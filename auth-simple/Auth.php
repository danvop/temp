<?php

class Auth
{
    // list 'username' => 'password'
    protected static $users;

    public static function init(array $users) {
        static::$users = $users;
    }

    public static function showUsers() {
        print_r(static::$users);
    }

    public static function login($user, $pass) {
        if(static::$users["$user"] == $pass) {
            
            $_SESSION['logged'] = $user;
           
        } else {
            return false;
        }

    }

    public static function logout(){
        if(static::check()){
            session_destroy();
            // unset($_SESSION['logged']);
        }      
    }

    public static function check(){
        
        if(isset($_SESSION['logged'])){
           
            return true;
        }
        
    }


}