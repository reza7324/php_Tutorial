<?php

// setcookie(name, value, expire)
// $_COOKIE['name']

// time stamp------------------------------------------

// echo time();
// echo "<br/>";
// echo time() + 3600;

// $_COOKIE[];

setcookie("user", "reza goodarzi", time() + 3600);
setcookie("user", "reza goodarzi", time() - 3600); // 

echo "<pre>";

// print_r($_COOKIE);
// print_r($_COOKIE['user']);


if(isset($_COOKIE['user'])){
    echo $_COOKIE['user'];
}else{
    echo "cookie is not set";
}


