<?php
use PHPUnit\Framework\TestCase;
include __DIR__."./../08/fizzBuzz.php";

class Q8_fizzBuzz extends TestCase {

    public function testStopLtStart(){
        $this->expectException(InvalidArgumentException::class);
        fizzBuzz(100,50);
    }

    public function testNegativeStop(){
        $this->expectException(InvalidArgumentException::class);
        fizzBuzz(-10,100);
    }

    public function testNegativeStart(){
        $this->expectException(InvalidArgumentException::class);
        fizzBuzz(-100,-10);
    }

    public function testMissingArguments() {
        $expected = "12Fizz4BuzzFizz78FizzBuzz11Fizz1314FizzBuzz1617Fizz19BuzzFizz2223FizzBuzz26Fizz2829FizzBuzz3132Fizz34BuzzFizz3738FizzBuzz41Fizz4344FizzBuzz4647Fizz49BuzzFizz5253FizzBuzz56Fizz5859FizzBuzz6162Fizz64BuzzFizz6768FizzBuzz71Fizz7374FizzBuzz7677Fizz79BuzzFizz8283FizzBuzz86Fizz8889FizzBuzz9192Fizz94BuzzFizz9798FizzBuzz";
        $this->assertEquals($expected, fizzBuzz());
    }

    public function testBuzzFizz() {
        $expected = "BuzzFizz";
        $this->assertEquals($expected, fizzBuzz(5,6));
    }

    public function testBuzz() {
        $expected = "Buzz";
        $this->assertEquals($expected, fizzBuzz(5,5));
    }

    public function testFizz() {
        $expected = "Fizz";
        $this->assertEquals($expected, fizzBuzz(453,453));
    }
    
    public function testNumber() {
        $expected = "557";
        $this->assertEquals($expected, fizzBuzz(557,557));
    }
}