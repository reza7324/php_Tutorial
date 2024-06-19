<?php
;
session_start();

$_SESSION['id'] = 3;
$_SESSION['name'] = "reza";


// unset($_SESSION['name']);


// session_unset();  #delete data from session

session_destroy(); #delete session


