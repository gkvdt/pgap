

<?php
include_once '../Database/Database.php';
    $sql='SELECT * FROM submenu2';

    $sth = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
    }



header('Content-disposition: attachment; filename="submenu2.json');
header('Content-type: application/json');

print json_encode($rows);
