<?php


  include_once '../Database/Database.php';


  if ($_GET['version_note']) {
    $sql = 'INSERT INTO m_version(version_note) VALUES ("' . $_GET['version_note']  .'")';
    mQuery($sql);
    header('Location: ../output/downloadAll.php');

  }else {
    header('Location: ../output.php');
  }




 ?>
