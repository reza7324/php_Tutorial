<?php
    echo "<pre>";
    // print_r($_POST);

    $errors = [];
    if(isset($_POST['send'])){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        if(!$email){ //empty($email) && $email == null
            // echo "email required";
            array_push($errors, "email required");
        }elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
            array_push($errors , "invalid email address");
        }

        if(empty($password)){
            // echo "Password required";
            array_push($errors, "Password required");
        } elseif(strlen($password) < 8){
            array_push( $errors , "Password can not be less than 8 characters");
        }
    }
    
    if(empty($errors)) {
        echo $email , $password;
    }

        echo "</pre>";
?>

<div>
    <?php foreach($errors as $error): ?>

        <p style="color: red;"><?= $error ?></p>

    <?php endforeach ?>
</div>


<form action="validate.php" method="post">

    <input type="email" name="email" /> Email
    <br>
    <input type="password" name="pass" /> Password
    <br>
    <button type="submit" name="send">Send</button>

</form>

