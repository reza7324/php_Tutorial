<?php 

// a-z, A-Z, 0-9, _

// $name;
// $NAME;
// $name3;
// $_name;
// $name_324;

$firstname;
$FirstName;
$fist_name;
$firstName; #





$name = "ali";
$Name= 'reza';

echo $name, $Name;

echo "<br>";
$newName= $name;
echo $newName;

echo "<br>";
$name= "sara";
echo $name;


$secondName= &$name;
echo "<br>";
$secondName= "mohammad";
echo $secondName;
echo $name;

