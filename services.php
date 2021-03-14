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
    <title>Фитнес-клуб.Услуги</title>  
</head>


<body> 
    
    <?php require "header.php"?>
    <div class="content">
    <?php
    if($_COOKIE['user'] == ''):
    ?> 
        ТО, ЧТО ВИДИТ ОБЫЧНЫЙ ПОЛЬЗОВАТЕЛЬ в услугах :))))));
<?php else: ?>                                      
    <?php require "helloy.php"?>
<?php endif; ?>
</div>
<?php require "footer.php"?>

</body>



                                                          
</html>
