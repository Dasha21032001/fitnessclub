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
    

    

    $query1 = "SELECT * FROM `список клиентов` WHERE `Логин` = '$login' AND  `Пароль` = '$password'";
    $query2 = "SELECT * FROM `сотрудники` WHERE `Логин` = '$login' AND  `Пароль` = '$password'";

    $result1=mysqli_query($conn,$query1);
    $user1=mysqli_fetch_assoc($result1);

    $result2=mysqli_query($conn,$query2);
    $user2=mysqli_fetch_assoc($result2);

    if(count($user1) != 0 ){
        setcookie('user', $user1['Имя'], time() + 3600, "/");
        header('Location: index.php');
    }
    else if(count($user2) != 0){
        setcookie('user', $user2['Имя'], time() + 3600, "/");
        header('Location: index.php');
    }
    else{
        echo"Такой пользователь не существует!";
    }
    mysqli_close( $conn );
?>
