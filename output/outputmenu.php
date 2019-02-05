<?php
include_once '../Database/Database.php';

  $sql='SELECT * FROM menu';

  $sth = mysqli_query($conn,$sql);
  $rows = array();
  while($r = mysqli_fetch_assoc($sth)) {
      $rows[] = $r;
  }

  header('Content-disposition: attachment; filename="menu.json');
  header('Content-type: application/json');

  print json_encode($rows);


 ?>
