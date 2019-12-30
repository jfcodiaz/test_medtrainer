<?php

function filterFiles($files, $exclude){
    return array_values(array_filter($files, function($item) use ($exclude){

        if(in_array($item, $exclude)) {
            return;
        }
        
        if(in_array(dirname($item), $exclude)) {
            return;
        }
        
        return $item;
    }));
}