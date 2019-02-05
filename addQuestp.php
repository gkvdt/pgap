<?php
include_once 'head.php';
$myWhere;
$questMenuId="";
$line="";

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

  echo $line . "<br>";?>


<br>
<hr>
<form name="myForm" action="addQuestt.php" method="get" onsubmit="return chechEmpty();">
<input type="hidden" name="menu_id" value="<?php echo $questMenuId; ?>">
 <input type="text" name="soru" placeholder="Soru" autocomplete="off"><br>
 <input type="text" name="a" placeholder="A şıkkı" autocomplete="off"><br>
 <input type="text" name="b" placeholder="B şıkkı" autocomplete="off"><br>
 <input type="text" name="c" placeholder="C şıkkı" autocomplete="off"><br>
 <input type="text" name="d" placeholder="D şıkkı" autocomplete="off"><br>
 <input type="text" name="e" placeholder="E şıkkı" autocomplete="off"><br>
 <input type="text" name="aciklama" placeholder="Soru Açıklaması (Boş Bırakılabilir)" autocomplete="off"><br>
 <select name="cevap"><br>
     <option value="1">A</option>
     <option value="2">B</option>
     <option value="3">C</option>
     <option value="4">D</option>
     <option value="5">E</option>

 </select><br>
 <input class="btn btn-large"  style="margin-left:170px;"type="submit" value="Ekle">
</form>


<?php include_once 'footer.php'; ?>
