<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kpss";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    $conn->set_charset("utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        #echo "Connected successfully";

    }



    function mQuery($sql) {
        global $conn;

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            return false;
        }

    }

    function checkSub($talbleName,$id){
        global $conn;
        $sql = 'SELECT * FROM '. $talbleName . ' WHERE submenu_id='.$id;
        $result = $conn->query($sql);
        $req;
        while($row = $result->fetch_assoc()){
            $req = $row['child'];
        }
        if($req == 0){
            $uSql='UPDATE '.$talbleName . ' SET child=1 WHERE submenu_id='.$id;
            mQuery($uSql);
            echo 'sıfır';
        }else{
            echo 'değil';
        }

    }
?>
