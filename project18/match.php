<?php

$x = 5;

$match = match($x){

    1 => "x is 1",
    2, 3 => "x is 2 or 3",
    4 => 'x is 4',
    default => "(default) x is $x"

};

echo $match;
