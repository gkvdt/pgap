<?php
include_once "../Database/Database.php";
include_once "session.php";

$myWhere;
$questMenuId="";
$line="";

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
    


<?php

#anamenu
if(@$_SESSION['menu_id']!="" || @$_SESSION['menu_id'] != null){
    $myWhere= "menu_id=".$_SESSION['menu_id'];
    $questMenuId .=$_SESSION['menu_id'];
    $sql = "SELECT * FROM menu WHERE menu_id=".$_SESSION['menu_id'];
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $line .='<b style="font-size:30px;">'.$row['menu_title'] ."</b>". " ==> ";
    }
}

#SUBMENU1
if(@$_SESSION['submenu_id1']!="" || @$_SESSION['submenu_id1'] != null){
    $myWhere="menu_id=".$_SESSION['menu_id']. " and submenu_id1=".$_SESSION['submenu_id1'];
    $questMenuId .="-".$_SESSION['submenu_id1'];
    $sql = "SELECT * FROM submenu1 WHERE menu_id=".$_SESSION['menu_id'] . " and submenu_id=".$_SESSION['submenu_id1'];
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $line .='<b style="font-size:30px;">'.$row['submenu_title'] ."</b>". " ==> ";
    }
}
#SUBMENU2
if(@$_SESSION['submenu_id2']!="" || @$_SESSION['submenu_id2'] != null){
    $myWhere= "menu_id=".$_SESSION['menu_id']. " and submenu_id1=".$_SESSION['submenu_id1']." and submenu_id2=".$_SESSION['submenu_id2'];
    $questMenuId .="-".$_SESSION['submenu_id2'];
    $sql = "SELECT * FROM submenu2 WHERE menu_id=".$_SESSION['submenu_id1'] . " and submenu_id=".$_SESSION['submenu_id2'];
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $line .='<b style="font-size:30px;">'.$row['submenu_title'] ."</b>". " ==> ";
    }
}

#submenu3
if(@$_SESSION['submenu_id3']!="" || @$_SESSION['submenu_id3'] != null){
    $myWhere= "menu_id=".$_SESSION['menu_id']. " and submenu_id1=".$_SESSION['submenu_id1']." and submenu_id2=".$_SESSION['submenu_id2'] . " and submenu_id3=".$_SESSION['submenu_id3'];
    $questMenuId .="-".$_SESSION['submenu_id3'];
    
    $sql = "SELECT * FROM submenu3 WHERE menu_id=".$_SESSION['submenu_id2'] . " and submenu_id=".$_SESSION['submenu_id3'];
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
        $line .='<b>'.$row['submenu_title'] ."</b>". " ==> ";
    }
}

#echo $myWhere . "<br>";
?>

<p> Soru ID = 
<?php echo $questMenuId ;?>
</p>
<?php echo $line . "<br>";?>

</div>
<hr>
<div>
        
<form name="myForm" action="addQuestt.php" method="get" onsubmit="return chechEmpty();">
<input type="hidden" name="menu_id" value="<?php echo $questMenuId; ?>">
        <input type="text" name="soru" placeholder="Soru" autocomplete="off">
        <input type="text" name="a" placeholder="A şıkkı" autocomplete="off">
        <input type="text" name="b" placeholder="B şıkkı" autocomplete="off">
        <input type="text" name="c" placeholder="C şıkkı" autocomplete="off">
        <input type="text" name="d" placeholder="D şıkkı" autocomplete="off">
        <input type="text" name="e" placeholder="E şıkkı" autocomplete="off">
        <input type="text" name="aciklama" placeholder="Soru Açıklaması (Boş Bırakılabilir)" autocomplete="off">
        <select name="cevap">
            <option value="1">A</option>
            <option value="2">B</option>
            <option value="3">C</option>
            <option value="4">D</option>
            <option value="5">E</option>
        
        </select>
        <input type="submit">
      </form>

</div>
  </body>
</html>





