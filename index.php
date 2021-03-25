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
    <title>Фитнес-клуб</title>  
</head>


<body> 
    
    <?php require "header.php"?>
    <div class="content">
    <?php
    session_start();
    
    if(empty($_SESSION["klient_id"])):
    ?> 
        ТО, ЧТО ВИДИТ ОБЫЧНЫЙ ПОЛЬЗОВАТЕЛЬ на главной странице :))))));
        
    <?php else: ?>                                      
        <?php require "helloy.php"?>

        <?php
            if(empty($_SESSION["klient_id"])){
                echo("Не залогинен");
            }
            else if(($_SESSION["employee"]) && ($_SESSION["code_d"] == 1)){
                echo("Админ привет ");
            }
            else if($_SESSION["employee"]){
                echo("Сотрудник привет ");
            }
            else{
                echo("Клиент привет");
            }
            //echo("code:".$_SESSION["code_d"]);
            //echo("CID:".!empty($_SESSION["code_d"]).":".$_SESSION["code_d"]);
            ?> 
    
    <?php endif; ?>
</div>
<?php require "footer.php"?>

</body>



                                                          
</html>
