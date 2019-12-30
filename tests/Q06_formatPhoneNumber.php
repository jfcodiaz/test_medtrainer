<?php
use PHPUnit\Framework\TestCase;
include __DIR__."./../06/formatPhoneNumber.php";

class Q06_formatPhoneNumber extends TestCase {

    public function testFormatPhoneNumber() {
        $expected = '123-456-7890';
        $this->assertEquals($expected, formatPhoneNumber('123-456-7890'));
        $this->assertEquals($expected, formatPhoneNumber('(123) 456-7890'));
        $this->assertEquals($expected, formatPhoneNumber('1234567890'));
        $this->assertEquals($expected, formatPhoneNumber('123 456 7890'));
    }

}
