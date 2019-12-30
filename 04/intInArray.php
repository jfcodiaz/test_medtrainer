<?php

function intInArray($arrNumber, $number) {
    if(is_int($number)) {
        return in_array($number, $arrNumber);
    }  
    throw new \Exception("\$number is not a integer");
}