<?php
session_start();
//$_SESSION['message'] = "";
?>

<!DOCTYPE html>
    <head>
<html>
        <meta charset="UTF-8">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
            <link rel="stylesheet" href="assets/css/style1.css">
    </head>

<body>
<h1>Sign In </h1>
<div class="container">
<form action="auth.php" method="post">
 <div class="input-field"> <input placeholder="Login"  type="text" name="login" > </div>
 <div class="input-field"> <input placeholder="Password"  type="password" name="password"> </div> 

 <input type="submit" class="btn" value="Send">
 
 <input type="reset" class="btn" value="Clear">
    <p class="register">
        you don`t have account? - <a href="/Lr2.2/registration.php">Click here</a> 
    </p>
   
</form>
</div>

<?php 
       

        if (isset($_GET["submit"])) {
            echo 'adfa';
            header('Location: index.php');
            exit;
        }
    ?>

</body>
</html>
