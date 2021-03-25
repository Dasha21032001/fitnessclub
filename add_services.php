<?php
    $name= filter_var(trim($_POST['name1']), FILTER_SANITIZE_STRING);
    
    require "connect_db.php";
    
    if (!$conn) {
        die("Подключение не удалось: " . mysqli_connect_error());
     }
    
    $sql="INSERT INTO `услуги` (`Название услуги`) VALUES ('$name')";
    mysqli_query($conn,$sql);
    
    
    mysqli_close( $conn );
    header('Location: services.php');
?>