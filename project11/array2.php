<?php 

$names = "ali, reza, amir";
$arr = explode(',', $names); // cama ro dar nazar migirim
echo "<pre>";
print_r($arr);
echo "</pre>";


$letters = ["a", "b", "c", "d", "e", "f", "g", "h"];
$str = implode('-', $letters);// - be onvan gharar mide
echo $str;


$num1= [1, 2, 3];
$num2= [9, 8, 7];
// $num3= ["hello", "world", "hi"];
$result= array_merge($num1, $num2);
echo "<pre>";
print_r($result);
echo "</pre>";


$num4= [1, 2, 3, 4, 5];
$num5= [1, 4, 6, 8, 10];
$result1 = array_diff($num4 , $num5);// tartib fargh dare | az array aval barmidare
// $result1 = array_diff_assoc($num4 , $num5);
echo "<pre>";
print_r($result1);
echo "</pre>";


