<?php
include "User.php";

$rawPassword = "Abc.1234";
$user = new User("Pako", $rawPassword);
echo "Raw Password: ".$rawPassword."\n";
echo "Hashed Password: ". $user->getHashedPassword()."\n";
echo "Check Password:\n";

var_dump($user->checkPassword($rawPassword));
try{
$user->checkPassword("helloword");
} catch(\Exception $ex){
    echo "Error: ".$ex->getMessage();
}
