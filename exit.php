<?php
     setcookie('user', $user['Имя'], time() - 3600, "/");
     header('Location: index.php');
?>
