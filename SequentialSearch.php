<?php

function sequentialSearch($arrayList, $item){
    $pos = 0;
    $found = false;

    while( $pos < sizeof($arrayList) && $found == false)
    {
        if($arrayList[$pos] == $item)
            $found = true;
        else
            $pos = $pos + 1;
    }

    return $found;
}

$testList = [1, 2, 3, 4, 5, 34, 56];
var_dump(sequentialSearch($testList, 5));
var_dump(sequentialSearch($testList, 0));

?>
