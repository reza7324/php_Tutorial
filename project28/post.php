<?php

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
?>

<form action="post.php" method="post">

    <!-- <input type="checkbox" name="php" />php
    <input type="checkbox" name="reactJS" value="react" />JS
    <br>
    <button type="submit" name="send">SEND</button> -->

    <!-- ------------------------------------------------ -->

    <!-- <select name="lang">
        <option value="laravel">PHP</option>
        <option>JAVA</option>
        <option>JS</option>
    </select>
    <br>
    <button type="submit" name="send">send</button> -->

    <!-- ------------------------------------------------- -->

    <select multiple name="lang[]">
        <option value="laravel">PHP</option>
        <option value="java">JAVA</option>
        <option value="react">JS</option>
    </select>
    <br>
    <button type="submit" name="send">send</button>


</form>