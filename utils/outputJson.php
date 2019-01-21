<?php 
    include_once '../Database/Database.php';

    echo '[';
     $sql='SELECT * FROM sorular';

    $sth = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
    }
    print json_encode($rows);

    echo ',';

    $sql='SELECT * FROM menu';

    $sth = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
    }
    print json_encode($rows);

    echo ',';


    $sql='SELECT * FROM submenu1';

    $sth = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
    }
    print json_encode($rows);

    echo ',';



    $sql='SELECT * FROM submenu2';

    $sth = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
    }
    print json_encode($rows);

    echo ',';


        
    $sql='SELECT * FROM submenu3';

    $sth = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
    }
    print json_encode($rows);

    echo ']';
