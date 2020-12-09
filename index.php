
<?php

/*
 * Подключаем файл для получения соединения к базе данных (PhpMyAdmin, MySQL)
 */

require_once 'connection.php';
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
   <link rel="stylesheet" href="assets/css/style.css">
   <style>
.raz {
  text-align: right;
}
</style>
</head>
<body>
<div class="header">
        <tr>
            <th><img src="assets\images\logo.png" height="100" width="100"></th>

            <div class="raz">

                
    <button type="button" class="btn" onClick="location.href='login.php'">Sign In</button>
    <button type="button" class="btn" onClick="location.href='registration.php'">Sign Up</button>
    
    <div>
    

</form>
       </tr>
</div>
<div class="container">
<table class="iksweb">
	<tbody>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Login</th>
			<th>Role</th>
		</tr>

        
        <?php



$user = mysqli_query($conn, "SELECT * FROM `users`");


$user = mysqli_fetch_all($user);
if($user != NULL){


foreach ($user as $user) {
    ?>
        <tr>
            <td><a href="profile.php?id=<?= $user[0] ?>"><?= $user[0] ?></td>
            <td><?= $user[1] ?></td>
            <td><?= $user[2] ?></td>
            <td><?= $user[3] ?></td>
            <td><?= $user[6] ?></td>
            <td><a href="change.php?id=<?= $user[0] ?>">Change</a></td>
            <td><a style="color: red;" href="delete.php?id=<?= $user[0] ?>">Delete</a></td>
        </tr>
        <form>
    <?php
}
?>
              
	</tbody>
</table>
<p style="text-align: center;"><a href="profile.php?id=<?= $user[0] ?>"><?= $user[1] ?></a><a href="login.php"> | Выйти</a></p>
    </form>
            <?php 
        }else {
                ?>
        <form>
        <p style="text-align: center;"><a href="login.php">Войти | </a>
        <a href="register.php">Зарегистрироваться</a></p>
        </form>
        <?php  
    }
        ?>
</div>

</body>
</html>