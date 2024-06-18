<?php 

//array anjomani

$user = [
    "name" => 'reza',
    "age" => 23
];

echo "<pre>";
print_r($user);

// i can change this
$user['age'] = 22;
print_r($user);

// i can add this
$user['city'] = "Tehran";
print_r($user);

//just see the values
$result = array_values($user);
print_r($result);

// just see the keys
$result = array_keys($user);
print_r($result);


?>
