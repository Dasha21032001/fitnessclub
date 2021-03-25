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
     
</head>


<body> 
    
    
    
<div class="content">
    <?php
    session_start();
    ?>
    <center>
<h3>Добавление услуги</h3>

<form action="add_services.php" method="post">
<input class="register_important" type="text" name="name1" id="name1" placeholder="Название услуги"><br>
<button type="submit">Добавить</button>
</form>

<br></br>
<h3>Удаление услуги</h3>

<form action="delete_services.php" method="post">
<input class="register_important" type="text" name="name2" id="name2" placeholder="Название услуги"><br>
<button type="submit">Удалить</button>
</form>

<br></br>

</center>



</div>

</body>
                                                     
</html>