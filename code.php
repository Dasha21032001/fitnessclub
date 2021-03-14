<?php
    $code= filter_var(trim($_POST['name_s']), FILTER_SANITIZE_STRING);
    if($code=="привет"){
        header('Location: register_s.php');
        exit;
    }
    else{
        header('Location: register.php');
    }
?>