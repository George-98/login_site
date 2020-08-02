<?php

class LoginScreen extends Controller{
    public static function LoginUser(){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

       $tableArray = self::query("SELECT HashPassword FROM Users WHERE Name='$username'");
       $dbPassword = trim($tableArray['HashPassword']);

        $userExist = password_verify($password, $dbPassword);

        if($userExist){
            echo 'Logged in';
        }
        else{
            echo '<h2>Login unsuccessful!</h2>';
            echo "User " . $username . " doesn't match the password!";
        }
    }

}