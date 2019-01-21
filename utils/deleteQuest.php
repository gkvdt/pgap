<?php


include_once '../Database/Database.php';

if($_GET['soru_id']!="" || $_GET['soru_id']!=null ){

    $sql = 'DELETE FROM sorular WHERE id='.$_GET['soru_id'];
    mQuery($sql);

}else{
    ?>

    <script>
        alert("hata meydana geldi bu durumu bana bildir");
    </script>
    <?php 
}

