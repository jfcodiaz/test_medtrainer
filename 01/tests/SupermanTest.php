<?php
use PHPUnit\Framework\TestCase;
include __DIR__."./../app/index.php";

class SupermanTest extends TestCase{

    public function test_end_superman() {
        $this->assertTrue(aboutSuperman("I love superman"));
    }

    public function test_begin_superman() {
        $this->assertTrue(aboutSuperman("Superman is awesome!"));
    }
    
    public function testContainsSuperman() {
        $this->assertTrue(aboutSuperman("Batman v Superman It's not so good"));
    }
    
    public function  testMissingSuperman() {
        $this->expectException(\Exception::class);
        aboutSuperman("Batman is better xD!");
    }

}