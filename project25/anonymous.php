<?php

// $x = 23;

// $greet = function ($name) use ($x) { //global 
//     // global $x;
//     echo "Hello $name - $x";
// };

// $greet("reza");

//-------------------------------------------------------

$y = 23;

$greet = fn($name) => "Hello $name - $y"; // arrowFunction

echo $greet("reza");


