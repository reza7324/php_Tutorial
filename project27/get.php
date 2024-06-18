<?php

echo "<pre>";
// print_r($_GET);

if(isset($_GET['send'])){
    print_r($_GET['email']);
    echo "<br>";
    print_r($_GET['pass']);
}

echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <form action="get.php" method="get">
        <input type="email" name="email"/>
        <br>
        <input type="password" name="pass" />
        <br>
        <button type="submit" name="send">SEND</button>
    </form>
    </pre>
</body>

</html>