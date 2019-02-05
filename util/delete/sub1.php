<?php

  include_once "../../Database/Database.php";

  if(@$_GET['menu_id']!=null || @$_GET['menu_id'] !=""){
      $sql = 'DELETE FROM menu WHERE menu_id='.$_GET['menu_id'];
      mQuery($sql);

      deleteSub1($_GET['menu_id']);

      $sql = 'DELETE FROM sorular WHERE menu_id="'.$_GET['menu_id'].'-*"';
      mQuery($sql);

      header('Location: ../../index.php');
  }

  function deleteSub1($id){
    global $conn;

    $sql = 'SELECT * FROM submenu1 WHERE menu_id='.$id;
    $result = $conn->query($sql);

    $temp;



    while($row = $result->fetch_assoc()){
      $temp = $row['submenu_id'];
      deleteSub2($temp);
    }

    $sql = 'DELETE FROM submenu1 WHERE menu_id='.$id;
    mQuery($sql);

  }



  function deleteSub2($id){
    global $conn;

    $sql = 'SELECT * FROM submenu2 WHERE menu_id='.$id;
    $result = $conn->query($sql);

    $temp;



    while($row = $result->fetch_assoc()){
      $temp = $row['submenu_id'];
      deleteSub3($temp);
    }


    $sql = 'DELETE FROM submenu2 WHERE menu_id='.$id;
    mQuery($sql);

  }




  function deleteSub3($id){
    global $conn;

    $sql = 'DELETE FROM submenu3 WHERE menu_id='.$id;
    mQuery($sql);


  }
?>
