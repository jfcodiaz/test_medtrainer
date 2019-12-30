<?php
use PHPUnit\Framework\TestCase;
include __DIR__."./../04/intInArray.php";

class Q04_intInArray extends TestCase {

    static $array = [1, 4, 7, 8, 10, 11, 20];
    
    public function testIntegerFound() {
        $this->assertTrue( intInArray(self::$array, 4));
        $this->assertTrue(intInArray(self::$array, 20));
    }

    public function testIntegerNotFound(){
        $this->assertFalse(intInArray(self::$array, 9));
    }

    public function testExeptionString(){
        $this->expectException(\Exception::class);
        intInArray(self::$array, "helloWord");
    }
    
    public function testExeptionNumberAsString(){
        $this->expectException(\Exception::class);
        intInArray(self::$array, "4");
    }

}