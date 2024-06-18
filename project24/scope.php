<?php

function add(){
    static $x = 1;
    $x++;
    echo $x;
}

add();
add();
add();
add();

//------------------------------------

echo "<br>";
echo $x = 0; //global 

function test(){
    global $x;

    $y = 1;//local
    echo $x;
}

echo "<br>";
test();

// echo $y;
