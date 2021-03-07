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
<input type="text" name="login" id="login" placeholder="*Введите логин"><br>
<input type="text" name="password" id="password" placeholder="*Введите пароль"><br>
<button type="submit">Авторизоваться</button>
</form>
</center>
<?php else: ?>
    <center><p>Здравствуйте, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a>.</p></center>
<?php endif; ?>
</body>

<?php require "footer.php"?>
                                                          
</html>