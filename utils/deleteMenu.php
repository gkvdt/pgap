<?php
    include_once "../Database/Database.php";

    if(@$_GET['menu_id']!=null || @$_GET['menu_id'] !=""){
        $sql = 'DELETE FROM menu WHERE menu_id='.$_GET['menu_id'];
        mQuery($sql);
        header('Location: EditMenu.php');
    }
    if(@$_GET['submenu1_id']!=null || @$_GET['submenu1_id'] !=""){
        $sql = 'DELETE FROM submenu1 WHERE submenu_id='.$_GET['submenu1_id'];
        mQuery($sql);
        header('Location: EditMenu.php');
    }
     if(@$_GET['submenu2_id']!=null || @$_GET['submenu2_id'] !=""){
        $sql = 'DELETE FROM submenu2 WHERE submenu_id='.$_GET['submenu2_id'];
        mQuery($sql);
        header('Location: EditMenu.php');
    }
     if(@$_GET['submenu3_id']!=null || @$_GET['submenu3_id'] !=""){
        $sql = 'DELETE FROM submenu3 WHERE submenu_id='.$_GET['submenu3_id'];
        mQuery($sql);
        header('Location: EditMenu.php');
    }