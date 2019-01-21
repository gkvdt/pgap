<?php 
    include_once '../Database/Database.php';

    if( $_GET['soru'] !=null || $_GET['soru']!=""||
        $_GET['a'] !=null || $_GET['a']!=""||
        $_GET['b'] !=null || $_GET['b']!=""||
        $_GET['c'] !=null || $_GET['c']!=""||
        $_GET['d'] !=null || $_GET['d']!=""||
        $_GET['e'] !=null || $_GET['e']!=""||
        $_GET['aciklama'] !=null || $_GET['aciklama']!=""){


        $sql = 'UPDATE sorular SET soru="'.$_GET['soru'].'" AND a="'.$_GET['a'].'" AND b="'.$_GET['b'].'" AND c="'.$_GET['c'].'" AND d="'.$_GET['d'].'" AND e="'.$_GET['e'].'" AND aciklama="'.$_GET['aciklama'].'" AND cevap='  . $_GET['cevap'].  ' WHERE id='.$_GET['soru_id'];

        echo $sql;
        mQuery($sql);


    }