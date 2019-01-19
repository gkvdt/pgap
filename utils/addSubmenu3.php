<?php
include_once "../Database/Database.php";

if($_GET){
    if($_GET["menu"]!=null || $_GET["menu"]!=""){

        $sub=0;
        
        $sql = 'INSERT INTO submenu3(menu_id,submenu_title,child) VALUES ("'. $_GET["menu_id"] .'","'. $_GET["menu"] .'","'. $sub .'")';

        
        if (mysqli_query($conn, $sql)) {
            
            echo "New record created successfully";
            checkSub('submenu2',$_GET['menu_id']);

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
    <div>
    <a href="../" class="button button1"> Ana Menü </a>
      <h1>Alt Menü 1 Ekle</h1>
      <form name="myForm" action="" method="get" onsubmit="return chechEmpty();">
      <select name="menu_id">
      <?php 
        $sql = "SELECT * FROM submenu2";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
      ?>
        <option value="<?php echo $row['submenu_id'] ?>"><?php echo $row['submenu_title'] ?></option>
      <?php } ?>
      </select>
  
        <input type="text" name="menu" placeholder="Menu Adi" autocomplete="off">

        <input type="submit">
      </form>
    </div>
  </body>
</html>

