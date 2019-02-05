<?php
include_once "head.php";

if($_GET){
    if($_GET["menu"]!=null || $_GET["menu"]!=""){
        if(@$_GET['sub']){
          $sub=1;
        }else{
          $sub=0;
        }
        $sql = 'INSERT INTO submenu1(menu_id,submenu_title,child) VALUES ("'. $_GET["menu_id"] .'","'. $_GET["menu"] .'","'. $sub .'")';


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
      <form name="myForm" action="" method="get" onsubmit="return chechEmpty();">
        <p>Üst Menü</p>
      <select name="menu_id">
      <?php
        $sql = "SELECT * FROM menu";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
      ?>
        <option value="<?php echo $row['menu_id'] ?>"><?php echo $row['menu_title'] ?></option>
      <?php } ?>
      </select>
      <br>

        <input type="text" name="menu" placeholder="Menu Adi" autocomplete="off">
        <br>
        <br>
        <input type="checkbox" name="sub" value="var"> Alt Menüsü Var mı ?<br>
        <br>
        <input type="submit">
      </form>


<?php include_once 'footer.php'; ?>
