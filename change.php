<?php

    /*
     * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
     */

    require_once 'connection.php';

    /*
     * Получаем ID продукта из адресной строки - /product.php?id=1
     */

    $user_id = $_GET['id'];

    /*
     * Делаем выборку строки с полученным ID выше
     */

    $user = mysqli_query($conn, "SELECT * FROM `users` WHERE `id` = '$user_id'");

    /*
     * Преобразовывем полученные данные в нормальный массив
     * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
     */

    $user = mysqli_fetch_assoc($user);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <link rel="stylesheet" href="assets/css/profile.css">
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label>Изображение профиля</label>
        <input type="file" name="photo" value="<?= $user['first_name'] ?>"></p>
        <label>Имя</label>
        <input type="text" name="first_name" value="<?= $user['first_name'] ?>"></p>
        <label>Фамилия</label>
        <input type="text" name="last_name" value="<?= $user['last_name'] ?>"></p>
        <label>Роль (1-Пользователь, 2-Админ) </label>
        <input type="text" name="role_id" value="<?= $user['role_id'] ?>"disabled></p>
        <label>Пароль</label>
        <input type="password" name="password"></p>
        <label>Подтвердите пароль</label>
        <input type="password" name="password_confirm"></p>
        <button type="submit">Update</button>
    </form>
</body>
</html>
