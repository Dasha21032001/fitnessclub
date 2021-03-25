<?php
     //session_start();
     setcookie("PHPSESSID","1",time()-1,"/");
     session_abort ();
    
    //setcookie('user', $user['Имя'], time() - 3600, "/");
     header('Location: index.php');
?>
