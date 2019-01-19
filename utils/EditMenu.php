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
<a href="../" class="button button1"> Ana Menü </a>

<h1>Menü Düzenle</h1>
<hr>

<table>
  <tr>
    <th>MenuID</th>
    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>
  <?php
    
    $sql = 'SELECT * FROM menu' ;
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $row['menu_id']; ?></td>
    <td><a href="listMenu.php?menu_id=<?php echo $row['menu_id']; ?>"><?php echo $row['menu_title']; ?></a></td>
    <td><a href="setMenu.php?menu_id=<?php echo $row['menu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="deleteMenu.php?menu_id=<?php echo $row['menu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>
<hr>

<h1>Submenu1 Düzenle</h1>
<hr>

<table>
  <tr>
    <th>MenuID</th>
    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>
  <?php
    
    $sql = 'SELECT * FROM submenu1' ;
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $row['submenu_id']; ?></td>
    <td><a href="listSubmenu1.php?menu_id=<?php echo $row['submenu_id']; ?>"><?php echo $row['submenu_title']; ?></a></td>
    <td><a href="setMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="deleteMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>
<hr>


<h1>Submenu2 Düzenle</h1>
<hr>

<table>
  <tr>
    <th>MenuID</th>
    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>
  <?php
    
    $sql = 'SELECT * FROM submenu2' ;
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $row['submenu_id']; ?></td>
    <td><a href="listSubmenu2.php?menu_id=<?php echo $row['submenu_id']; ?>"><?php echo $row['submenu_title']; ?></a></td>
    <td><a href="setMenu.php?submenu2_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="deleteMenu.php?submenu2_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>
<hr>

<h1>Submenu3 Düzenle</h1>
<hr>

<table>
  <tr>
    <th>MenuID</th>
    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>
  <?php
    
    $sql = 'SELECT * FROM submenu3' ;
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $row['submenu_id']; ?></td>
    <td><?php echo $row['submenu_title']; ?></td>
    <td><a href="setMenu.php?submenu3_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="deleteMenu.php?submenu3_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>
<hr>
</div>
</body>
</html>
