<?php

$numbers = [1, 2, 10, 22, 34, 44, 55];
// echo count($numbers);  

// for($i = 0; $i < count($numbers); $i++){

//     echo $numbers[$i] . "<br>";

// }

//-------------------------------------------------

// $i = 0;
// while($i < count($numbers)){
//     echo $numbers[$i] . "<br>";
//     $i++;
// }

//-------------------------------------------------

// foreach($numbers as $number){
//     echo $number . "<br>";
// }


// foreach($numbers as $key => $number) {
//     echo $key . " -> " . $number . "<br>"; 
// }


$numbers = [ 'a' => 1, 'b' => 2, 10, 22, 34, 44, 55];

foreach($numbers as $key => $number){
    echo $key . ' >> ' . $number . "<br>";
}

?>

<?php foreach($numbers as $key => $number): ?>
    
    <p><?= $key ." -> ". $number  ?></p>

<?php endforeach ?>



