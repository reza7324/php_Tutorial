<?php

function sayHello($name, $age = null){
    echo "Hello $name - $age";
}

sayHello("reza", 22);




function add ($x, $y){
    
    return $x + $y;
}

// echo add(44, 22);

$result = add( 443, 22);
echo $result;
