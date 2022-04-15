<?php
function printN($n){
    if($n>5){
        return;
    }
    echo $n."\n";
    $n++;
    printN($n);
}

printN(1);