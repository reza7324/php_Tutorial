<?php


$errors = [];
if (isset($_POST['send'])) {

    define('email', $_POST['email']);
    define('password', $_POST['password']);

    if (!email) {
        // echo "Please Enter your email address";
        array_push($errors, "Please Enter your email address");
    }elseif(!filter_var(email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Invalid email address");
    }

    if (!password) {
        // echo "Please Enter your pasword";
        array_push($errors, "Please Enter your password");
    }elseif(strlen(password) <=8){
        array_push($errors, "invalid password");
    }

    // show-------------------------------

    if(empty($errors)) {
        echo email, password;
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

    <?php foreach($errors as $error) : ?>

        <p style="color: red;"><?= $error ?></p>
    
    <?php endforeach ?>

    

    <form action="practice.php" method="post">
        Email:
        <input type="text" name="email" />
        <br>
        Password:
        <input type="password" name="password" />
        <br>
        <button type="submit" name="send"> >>SEND<< </button>
    </form>

</body>

</html>