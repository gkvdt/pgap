<?php 

    include_once '../Database/Database.php';

    if(@$_GET['soru'] !=null ||@$_GET['soru'] !="" ||
@$_GET['a'] !=null ||@$_GET['a'] !="" ||
@$_GET['b'] !=null ||@$_GET['b'] !="" ||
@$_GET['c'] !=null ||@$_GET['c'] !="" ||
@$_GET['d'] !=null ||@$_GET['d'] !="" ||
@$_GET['e'] !=null ||@$_GET['e'] !="" ||
@$_GET['cevap'] !=null ||@$_GET['cevap'] !="" || @$_GET['menu_id']!=null || @$_GET['menu_id']!=""
    ){
        if($_GET['aciklama']!=null || $_GET['aciklama']!=""){
            $sql = 'INSERT INTO sorular ( menu_id,soru,a,b,c,d,e,cevap,aciklama) VALUES ("'.
            $_GET['menu_id'] .'","'.$_GET['soru'] .'","'.$_GET['a'] .'","'.$_GET['b'] .'","'.$_GET['c'] .'","'.$_GET['d'] .'","'.$_GET['e'] .'","'.$_GET['cevap'] .'","'.$_GET['aciklama'] .'")';
        }else{

            $sql = 'INSERT INTO sorular ( menu_id,soru,a,b,c,d,e,cevap) VALUES ("'.
            $_GET['menu_id'] .'","'.$_GET['soru'] .'","'.$_GET['a'] .'","'.$_GET['b'] .'","'.$_GET['c'] .'","'.$_GET['d'] .'","'.$_GET['e'] .'","'.$_GET['cevap'] .'")';
        }

    }