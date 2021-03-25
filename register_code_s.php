<?php
    $surname= filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
    $name= filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $patronymic= filter_var(trim($_POST['patronymic']), FILTER_SANITIZE_STRING);
    $number_phone= filter_var(trim($_POST['number_phone']), FILTER_SANITIZE_STRING);
    $login= filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password= filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $code_d= filter_var(trim($_POST['code_d']), FILTER_SANITIZE_STRING);

    if(mb_strlen($surname) < 1 || mb_strlen($name)<1  || mb_strlen($patronymic)<1  || mb_strlen($number_phone)<1 || mb_strlen($login)<1 || mb_strlen($password)<1 || mb_strlen($code_d)<1){
        echo "Введите обязательные данные!";
        exit();
    } else if(mb_strlen($password)<8){
        echo "Длина пароля должна быть не меньше 8 символов!";
        exit();
    }else if(mb_strlen($number_phone)<11 && mb_strlen($number_phone)>11){
        echo "Длина номера телефона - 11 символов!";
        exit();
    }else if(mb_strlen($surname)>45 || mb_strlen($name)>45 || mb_strlen($patronymic)>45 || mb_strlen($number_phone)>15 || mb_strlen($login)>45 || mb_strlen($password)>45){
        echo "Длина номера телефона - 11 символов! Длина остальных данных не больше 45 символов!";
        exit();
    }
    
    $password = md5($password."kailnicshaeava");
    require "connect_db.php";
    
    if (!$conn) {
        die("Подключение не удалось: " . mysqli_connect_error());
     }
    

    $sql1 = "SELECT * FROM `сотрудники` WHERE `Логин` = '$login'";
    $sql2 = "SELECT * FROM `сотрудники` WHERE `Пароль` = '$password'";
    $result1=mysqli_query($conn,$sql1);
    $result2=mysqli_query($conn,$sql2);
    $user1=mysqli_fetch_assoc($result1);
    $user2=mysqli_fetch_assoc($result2);

    if(count($user1) != 0){
        echo "Такой логин уже существует!";
        exit();
    }else if(count($user2) != 0){
        echo "Такой пароль уже существует!";
        exit();
    }else{
    $sql="INSERT INTO `сотрудники` (`Фамилия`, `Имя`, `Отчество`, `Номер телефона`, `Дни работы`, `Оклад`, `Должности_Код должности`, `Логин`, `Пароль`)
    VALUES ('$surname', '$name', '$patronymic', '$number_phone', null, null, '$code_d', '$login', '$password')";

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
     } else {
       echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
     }
    
    mysqli_close( $conn );
    header('Location: index.php');
    }
?>
