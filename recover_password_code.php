<?php
    $login= filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $new_password= filter_var(trim($_POST['new_password']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login)<1 && mb_strlen($new_password)<1){
        echo "Введите обязательные данные!";
        exit();
    } else if(mb_strlen($new_password)<8){
        echo "Длина пароля должна быть не меньше 8 символов!";
        exit();
    }
    
    $new_password = md5($new_password."kailnicshaeava");

    $servername = "localhost";
    $database = "фитнес-клуб";
    $username = "root";
    $pass = "alisa1983";

    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $pass, $database);

    $sql = "UPDATE `список клиентов` SET Пароль='$new_password' WHERE Логин='$login'";

    if (mysqli_query($conn, $sql)) {
        header('Location: avto.php');
        exit;
     } else {
       echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
     }
    
    mysqli_close( $conn );
    header('Location: index.php');

?>