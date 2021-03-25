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

    require "connect_db.php";

    $sql = "UPDATE `список клиентов` SET Пароль='$new_password' WHERE Логин='$login'";
    $sql1 = "UPDATE `сотрудники` SET Пароль='$new_password' WHERE Логин='$login'";

    if (mysqli_query($conn, $sql1)) {
        header('Location: avto.php');
        
     } 
     else {
        echo "Ошибка: " . $sql1 . "<br>" . mysqli_error($conn);
      }


     if(mysqli_query($conn, $sql)){
        header('Location: avto.php');
        
      }
     else {
       echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
     }
    
    mysqli_close( $conn );
    header('Location: index.php');

?>
