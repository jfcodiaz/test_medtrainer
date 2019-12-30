<?php
use PHPUnit\Framework\TestCase;
include __DIR__."/../03/app/User.php";

class Q03_HashPasswordTest extends TestCase {

    public function testHashPassword() {
        
        $rawPassword = "Abc.1234";
        $user = new User("Pako", $rawPassword);

        $this->assertNotEquals($rawPassword, $user->getHashedPassword());
        $this->assertTrue($user->checkPassword($rawPassword));
        $this->expectException(\Exception::class);
        $user->checkPassword("helloword");
       
    }
    
}