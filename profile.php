<?php

  

    require_once 'connection.php';

    

    $user_id = $_GET['id'];

    

    $user = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'");

    

    $user = mysqli_fetch_assoc($user);

    

?>

<!doctype html>
<html lang="en">
<head>
    <title>Info</title>
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>
    <form>
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label>Изображение профиля</label>
        <?= $user['photo'] ?>
        <p></p>
        <label>Имя</label>
        <input type="text" name="first_name" value="<?= $user['first_name'] ?>"disabled>
        <p></p>
        <label>Фамилия</label>
        <input type="text" name="last_name" value="<?= $user['last_name'] ?>"disabled></p>
        <label>Роль (1-Пользователь, 2-Админ) </label>
        <input type="text" name="role_id" value="<?= $user['role_id'] ?>" disabled></p>
        <label>Пароль</label>
        <input type="text" name="password" value="<?= $user['password'] ?>" disabled></p>
    
    </form>

    
</body>
</html>