<?php

function aboutSuperman($str){
    if (strpos(strtolower($str), "superman") === false ) {
        throw new Exception();
    }
    return true;
}
