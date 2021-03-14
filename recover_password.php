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
    <title>Фитнес-клуб.Восстановление пароля</title>  
</head>
<?php require "header.php"?>


<body>
    <?php
    if($_COOKIE['user'] == ''):
    ?> 
<center>
<h3>Восстановление пароля</h3>
<form action="recover_password_code.php" method="post">
<div class="form">
<input class="register_important" type="text" name="login" id="login" placeholder="Введите логин"><br>
<input class="register_important" type="text" name="new_password" id="password" placeholder="Введите новый пароль"><br>
</div>
<button type="submit">Отправить</button><br>
</center>

<?php endif; ?>
</body>

<?php require "footer.php"?>
                                                          
</html>