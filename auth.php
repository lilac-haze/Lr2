<?php

require_once "connection.php";

    $login = $_POST["login"];
    
    $password = $_POST['password'];

    $check_user = mysqli_query($conn, "SELECT * FROM `users` WHERE `login` = '$login'  AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        header('Location: ../Lr2.2/index.php');

    } else {
        echo 'Не верный данные или пароль';
        exit();
    }
?>