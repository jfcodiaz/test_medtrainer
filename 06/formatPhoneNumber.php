<?php

function formatPhoneNumber($tel){
    $number = preg_replace('/[^0-9]/', '', $tel);
    if(strlen($number) == 10) {
        return substr($number,0,3).'-'.substr($number,3,3).'-'.substr($number, 6);
    }
    throw new \Exception("Invalid Number");
}