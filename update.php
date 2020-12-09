

<?php



require_once 'connection.php';

/*
 * Создаем переменные со значениями, которые были получены с $_POST
 */
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $photo = $_POST['photo'];
    
    if ($password != $password_confirm) {
        echo "Пароли не совпадают";
        exit();
    } else if(mb_strlen($first_name) < 1) {
        echo "Недопустимая длина имени";
        exit();
    }else if(mb_strlen($last_name) < 1) {
        echo "Недопустимая длина фамилии";
        exit();
    }else if(mb_strlen($password) < 6) {
        echo "Недопустимая длина пароля (от 6 символов)";
        exit();  
    }else{
/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($conn, "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name', `password` = '$password', `photo` = '$photo' WHERE `users`.`id` = '$id'");

/*
 * Переадресация на главную страницу
 */
header('Location: ../Lr2.2/index.php');
}

