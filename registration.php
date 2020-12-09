<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/reg.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="change.php" method="post" enctype="multipart/form-data">
        <label>Имя</label>
        <input type="text" name="first_name" placeholder="Введите свое имя">
        <label>Фамилия</label>
        <input type="text" name="last_name" placeholder="Введите свою фамилию">
        <label>Роль</label>
        <br><select name = "role_id" size = "1">
        <option value="0">Select role</option>
        <option value="1">User</option>
        <option value="2">Admin</option> 
        </select></br>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="login.php">авторизируйтесь</a>!
        </p>
    </form>

</body>
</html>

