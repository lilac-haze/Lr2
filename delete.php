<?php


require_once 'connection.php';



$id = $_GET['id'];



mysqli_query($conn, "DELETE FROM `users` WHERE `users`.`id` = '$id'");



header('Location: ../Lr2.2/index.php');