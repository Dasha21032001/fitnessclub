<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, iniyial-
    scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/icon.png">
     
</head>


<body> 
<script>
    
    function viewDiv1(){
      document.getElementById("div1").style.display = "block";
      document.getElementById("div2").style.display = "none";
    };
         
    function viewDiv2(){
      document.getElementById("div2").style.display = "block";
      document.getElementById("div1").style.display = "none";
    };
    </script>

    
<div class="content">
    <?php
    session_start();
    ?>
    
    <div class="box0">
        <input type="button" value="Разовое посещение" onmousedown="viewDiv1()">     
    </div>
     
    <div class="box0">
        <input type="button" value="Абонемент" onmousedown="viewDiv2()">       
    </div>
    
    <div id="div1">
           ddsd
        </div>
           
    <div id="div2">
           
    </div>


</div>

</body>
                                                     
</html>