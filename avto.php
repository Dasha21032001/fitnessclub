<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, iniyial-
    scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/icon.png">
    <title>Фитнес-клуб.Авторизация</title>  
</head>
<?php require "header.php"?>


<body>
    <?php
    if($_COOKIE['user'] == ''):
    ?> 
<center>
<h3>Вход</h3>
<form action="avto_code.php" method="post">
<div class="form">
<input class="register_important" type="text" name="login" id="login" placeholder="Введите логин"><br>
<input class="register_important" type="text" name="password" id="password" placeholder="Введите пароль"><br>
</div>
<button type="submit">Авторизоваться</button><br>
<p class="text_no_account">У вас нет аккаунта?<br>
Зарегистрируйтесь <a class="link-output" href="register.php" ><font size="4" style="color: rgb(214, 12, 12);">здесь</font></a>!</p>
<p class="forget_password" ><a class="link-output" href="recover_password.php" ><font size="3" style="color: rgb(214, 12, 12);">Забыли пароль?</font></a></p>
</form>
</center>
<?php else: ?>                                      
<?php require "helloy.php"?>
<?php endif; ?>
</body>

<?php require "footer.php"?>
                                                          
</html>
