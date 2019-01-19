<?php
include_once "../Database/Database.php";
include_once "session.php";

if(!$_GET){
  $_SESSION['menu_id']="";
  $_SESSION['submenu_id1']="";
  $_SESSION['submenu_id2']="";
  $_SESSION['submenu_id3']="";
}



    if(@$_GET['buton']=="Ekle"){
        if($_GET['menu_id']!=null || $_GET['menu_id']!="" ){
            $menu_id=$_GET['menu_id'];
            $_SESSION['menu_id']=$menu_id;
            echo "<br>" . $menu_id . "<br>";

        }
        if(@$_GET['submenu1_id']!=null || @$_GET['submenu1_id']!="" ){
            $submenu_id1=$_GET['submenu1_id'];
            $_SESSION['submenu_id1']=$submenu_id1;
            echo $submenu_id1 . "<br>";

        }
        if(@$_GET['submenu2_id']!=null || @$_GET['submenu2_id']!="" ){
            $submenu_id2=$_GET['submenu2_id'];
            $_SESSION['submenu_id2']=$submenu_id2;
            echo $submenu_id2 . "<br>";
            
        }
        if(@$_GET['submenu3_id']!=null || @@$_GET['submenu3_id']!="" ){
            $submenu_id3=$_GET['submenu3_id'];
            $_SESSION['submenu_id3']=$submenu_id3;
            echo $submenu_id3 . "<br>";
        }

        header('Location: addQuestp.php');
        
        return false;
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
      <h1>Soru Ekle</h1>
      <form name="myForm" action="" method="get">
      Ana Menü:<select name="menu_id">
      <?php #MENU
        $sql = "SELECT * FROM menu";
        $result = $conn->query($sql);

        while($row0 = $result->fetch_assoc()){
      ?>
        <option
        <?php if(@$row0['menu_id']==@$_GET['menu_id']){
          echo ' selected ';

        }
         ?>
         value="<?php echo $row0['menu_id'] ?>"><?php echo $row0['menu_title'] ?></option>
      <?php } ?>
      </select>

      <?php
        if(@$_GET['menu_id']){ 
            $menu_id =$_GET['menu_id'];
    ?>
      1.Alt Menü:<select name="submenu1_id">
      <?php 
        $sql = 'SELECT * FROM submenu1 where menu_id="'.$menu_id .'"' ;
        $result = $conn->query($sql);
        $sub1have=false;

        while($row1 = $result->fetch_assoc()){
      ?>
        <option
        <?php if(@$row1['submenu_id']==@$_GET['submenu1_id']){
          echo ' selected ';
          if($row1['child']!=0){
            $sub1have=true;
          }
        }
         ?>
         value="<?php echo $row1['submenu_id'] ?>"><?php echo $row1['submenu_title'] ?></option>
      <?php } ?>
      </select>
        <?php } ?>
  


        
      <?php
        if(@$_GET['submenu1_id'] && $sub1have){ 
            $submenu1_id =$_GET['submenu1_id'];
            $sub2have;
    ?>
      2.Alt Menü:<select name="submenu2_id">
      <?php 
        $sql = 'SELECT * FROM submenu2 where menu_id="'.$submenu1_id .'"' ;
        $result = $conn->query($sql);

        while($row2 = $result->fetch_assoc()){
          if($row2['child']!=0){
            $sub2have=true;
          }
      ?>
        <option 
        <?php if(@$row2['menu_id']==@$_GET['menu_id']){
          echo ' selected ';
          if($row0['child']!=0){
            $sub1have=true;
          }
        }
         ?>
        value="<?php echo $row2['submenu_id'] ?>"><?php echo $row2['submenu_title'] ?></option>
      <?php } ?>
      </select>
        <?php } ?>     
      <?php
        if(@$_GET['submenu2_id'] && @$sub2have){ 
            $submenu2_id =$_GET['submenu2_id'];
           
    ?>
      3.Alt Menü:<select name="submenu3_id">
      <?php 
        $sql = 'SELECT * FROM submenu3 where menu_id="'.$submenu2_id .'"' ;
        $result = $conn->query($sql);

        while($row2 = $result->fetch_assoc()){

      ?>
        <option 
        <?php if(@$row2['menu_id']==@$_GET['menu_id']){
          echo ' selected ';
        }
         ?>
        value="<?php echo $row2['submenu_id'] ?>"><?php echo $row2['submenu_title'] ?></option>
      <?php } ?>
      </select>
        <?php } ?>
     
     
 
        <input type="submit" value="Alt Menüsünü Getir" name="buton">
        <input type="submit" value="Ekle" name="buton">

      </form>
    </div>
  </body>
</html>

