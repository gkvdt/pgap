
<h4>Menüler</h4>

<table class="table">
  <tr>
    <th width="40%">MenuID</th>
    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>

<?php

    $sql = 'SELECT * FROM menu';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){


  ?>
  <tr>
    <td><?php echo $row['menu_id']; ?></td>
    <td><?php echo $row['menu_title']; ?></td>
    <td><a href="setMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="util/delete/menu.php?menu_id=<?php echo $row['menu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>


<hr>

<h4>Alt Menüler 1</h4>

<table class="table">
  <tr>
    <th width="40%">From</th>
    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>

<?php

    $sql = 'SELECT * FROM submenu1';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo getUpData(0,$row['menu_id']); ?></td>
    <td><?php echo $row['submenu_title']; ?></td>
    <td><a href="setMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="deleteMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>




<hr>

<h4>Alt Menüler 2</h4>

<table class="table">
  <tr>
 <th width="40%">From</th>

    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>

<?php

    $sql = 'SELECT * FROM submenu2';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo getUpData(1,$row['menu_id']); ?></td>
    <td><?php echo $row['submenu_title']; ?></td>
    <td><a href="setMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="deleteMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>


<hr>

<h4>Alt Menüler 3</h4>

<table class="table">
  <tr>
    <th width="40%">From</th>
    <th>Menu Title</th>
    <th width="10%">Edit</th>
    <th width="10%">Delete</th>
  </tr>

<?php

    $sql = 'SELECT * FROM submenu3';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo getUpData(2,$row['menu_id']); ?></td>
    <td><?php echo $row['submenu_title']; ?></td>
    <td><a href="setMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Düzenle </a></td>
    <td><a href="deleteMenu.php?submenu1_id=<?php echo $row['submenu_id']; ?>" class="button2 button1"> Sil </a></td>
  </tr>
    <?php } ?>
</table>
