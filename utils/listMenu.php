<?php include_once "../Database/Database.php" ?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/stil.css">
    <script src="../js/script.js"></script>

</head>
<body>

<div>

<h1>Menu Alt Menüleri</h1>
<hr>

<table>
  <tr>
    <th>MenuID</th>
    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>
  <?php
    
    $sql = 'SELECT * FROM submenu1 WHERE menu_id='.$_GET['menu_id'] ;
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $row['submenu_id']; ?></td>
    <td><?php echo $row['submenu_title']; ?></td>
    <td><a href="setMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="deleteMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>
<hr>
</div>
</body>
</html>

