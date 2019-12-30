<?php

if(!function_exists('password_hash')){
    include "./../../vendor/ircmaxell/password-compat/lib/password.php";
}

class User {
    
    private $username;
    private $password;
    
    private static $hashOptions = array(
        'salt' => "123abcABCD!#.698pokgbjh",
        'cost' => 12
    );
    
    public function __construct($username, $rawPassword){
        $this->username = $username;
        $this->setPassword($rawPassword);
    }

    public function setPassword($rawPassword){
        $this->password = password_hash($rawPassword, PASSWORD_DEFAULT, self::$hashOptions);
        return $this;
    }

    public function getHashedPassword() {
        return $this->password;
    }

    public function checkPassword($rawPassword) {
        if(!password_verify($rawPassword, $this->password)){
            throw new \Exception("Error: invalid password");
        }
        return true;
    }

}