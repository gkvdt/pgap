<?php
include_once "../Database/Database.php";

if($_GET){
    if($_GET["menu"]!=null || $_GET["menu"]!=""){
        
        $sql = 'INSERT INTO menu(menu_title) VALUES ("'. $_GET["menu"] .'")';

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

            return false;
        }


        
    }else if($_GET){
    ?>    
        <script>alert("alanı doldur");</script>
    <?php

    }
}
?>

<html>
  <head>
  <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/stil.css">
    <script src="../js/script.js"></script>
  </head>
  <body>
  <a href="../" class="button button1"> Ana Menü </a>
    <div>
        <h1>Menü Ekle</h1>
        
      <form name="myForm" action="" method="get" onsubmit="return chechEmpty();">
        <input type="text" name="menu" placeholder="Menu Adi" autocomplete="off">
        <input type="submit">
      </form>
    </div>
  </body>
</html>
