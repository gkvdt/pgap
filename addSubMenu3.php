<?php
include_once 'head.php';
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
      <form name="myForm" action="" method="get" onsubmit="return chechEmpty();">
        <p>Üst Menü</p>
      <select name="menu_id">
      <?php
        $sql = "SELECT * FROM submenu2";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){
      ?>
        <option value="<?php echo $row['submenu_id'] ?>"><?php echo $row['submenu_title'] ?></option>
      <?php } ?>
      </select>
<br>
        <input type="text" name="menu" placeholder="Menu Adi" autocomplete="off">
<br>
        <input type="submit">
      </form>

<?php include_once 'footer.php'; ?>
