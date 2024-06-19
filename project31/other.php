<?php

// phpinfo();

session_start();

// echo $_SESSION['id'];    

if(isset($_SESSION['id'])) {
    echo "<pre>";
    echo "id=" . $_SESSION['id'];
    echo "</br>";
    if(isset($_SESSION['name'])) {
        echo "name=" . $_SESSION['name'];
    }
    echo"</pre>";
}