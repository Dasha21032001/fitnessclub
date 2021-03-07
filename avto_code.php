<?php
    $login= filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password= filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    
    $password = md5($password."kailnicshaeava");

    $servername = "localhost";
    $database = "фитнес-клуб";
    $username = "root";
    $pass = "alisa1983";

    // Создаем соединение
    $conn = mysqli_connect($servername, $username, $pass, $database);
    

    

    $query = "SELECT * FROM `список клиентов` WHERE `Логин` = '$login' AND  `Пароль` = '$password'";
    $result=mysqli_query($conn,$query);
    $user=mysqli_fetch_assoc($result);

    if(count($user)== 0){
        echo "Такой пользователь не найден!";
        exit();
    }

    setcookie('user', $user['Имя'], time() + 3600, "/");
    
    mysqli_close( $conn );
    header('Location: avto.php');
?>