<?php

include_once '../Database/Database.php';

    $sql='SELECT * FROM m_version';

    $sth = mysqli_query($conn,$sql);
    $rows = array();
    while($r = mysqli_fetch_assoc($sth)) {
        $rows[] = $r;
    }


header('Content-disposition: attachment; filename="version.json');
header('Content-type: application/json');

print json_encode($rows);
