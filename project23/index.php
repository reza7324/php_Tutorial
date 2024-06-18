<?php
declare(strict_types = 1);

// function add(int $x, float $y) {
//     return $x + $y;
// }

// echo add(4, 3.33);
//---------------------------------------------


// function add($x, $y, ...$numbers) {
    
//     $z = 0;
//     foreach($numbers as $number) {
//         $z += $number;
//     }
//     return $z + $x + $y;
// }

// // print_r( add(4, 3.33, 33, 2123));
// echo add(4, 3.33, 33, 4);
//---------------------------------------------


function add(...$numbers) {

    $z = array_sum($numbers);
    return $z;

}

echo add(3, 44, 5, 1, 55);




