<?php
    $name= filter_var(trim($_POST['name2']), FILTER_SANITIZE_STRING);
    
    require "connect_db.php";
    
    if (!$conn) {
        die("Подключение не удалось: " . mysqli_connect_error());
     }
     
    $sql="DELETE FROM `услуги` WHERE (`Название услуги` = '$name')";
    mysqli_query($conn,$sql);
    
    
    mysqli_close( $conn );
    header('Location: services.php');
?>