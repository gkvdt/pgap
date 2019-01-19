<?php

    require_once 'Database.php';

    $ders_id = $_GET['ders_id'];
    $yil = $_GET['yil'];
    $soru = $_GET['soru'];
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];
    $d = $_GET['d'];
    $e = $_GET['e'];


    $sql = 'INSERT INTO soru(ders_id,yil,soru,a,b,c,d,e) VALUES ("'. $ders_id .'","'. $yil .'","'. $soru .'","'. $a .'","'. $b .'","'. $c .'","'. $d .'","'. $e .'")';

    if(mQuery($sql)){
        ?>
            <script>
                window.location.href="http://localhost/www/kpssAdminPanel/soruEkle.php";
                alert("Kayıt Başarılı..");
            </script>

        <?php
    }else{
        ?>
            <script>
                window.location.href="http://localhost/www/kpssAdminPanel/soruEkle.php";
                alert("Hata oldu Kontrol ett!!!");
            </script>

        <?php
    }

