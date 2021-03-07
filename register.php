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
    <title>Фитнес-клуб.Регистрация</title>  
</head>
<?php require "header.php"?>

<body> 
<center>
<h3>Регистрация</h3>
<form action="register_code.php" method="post">
<input type="text" name="surname" id="surname" placeholder="*Введите фамилию"><br>
<input type="text" name="name" id="name" placeholder="*Введите имя"><br>
<input type="text" name="patronymic" id="patronymic" placeholder="Введите отчество"><br>
<input type="text" name="number_phone" id="number_phone" placeholder="Введите номер телефона"><br>
<input type="text" name="login" id="login" placeholder="*Введите логин"><br>
<input type="text" name="password" id="password" placeholder="*Введите пароль"><br>
<button type="submit">Зарегистрироваться</button>
</form>
</center>
</body>

<?php require "footer.php"?>
                                                          
</html>