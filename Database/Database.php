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


createVersionTable();
    function mQuery($sql) {
        global $conn;

        if (mysqli_query($conn, $sql)) {
            #echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            return false;
        }

    }

    function createVersionTable(){
      mQuery('CREATE TABLE IF NOT EXISTS m_version(version INTEGER(6) PRIMARY KEY AUTO_INCREMENT,version_note TEXT)');
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


    function getUpData($table, $upMenuId){
      $result = array();
      $result[0]="asd";


      switch ($table) {
        case 0:
          $result = fromMenu($upMenuId);
          break;
        case 1:
          $result = fromSub1Menu($upMenuId);
          break;
        case 2:
          $result = fromSub2Menu($upMenuId);
          break;
        case 3:
          $result = fromSub3Menu($upMenuId);
          break;
      }

      return @$result[0];
    }

    function fromMenu($id ,$arr = array()){
      global $conn;

      $sql = 'SELECT * FROM menu WHERE menu_id='.$id;
      $result = $conn->query($sql);

      $temp = $arr;



      while($row = $result->fetch_assoc()){
        $temp[0] = $row['menu_title']. " > " .@$temp[0];
        $temp[1] = $row['menu_id'];
      }

      return $temp;
    }


    function fromSub1Menu($id ,$arr = array()){
      global $conn;

      $sql = 'SELECT * FROM submenu1 WHERE submenu_id='.$id;
      $result = $conn->query($sql);

      $temp = $arr;



      while($row = $result->fetch_assoc()){
        $temp[0] = $row['submenu_title']. " > " .@$temp[0];
        $temp[1] = $row['menu_id'];
      }

      $temp = @fromMenu($temp[1],$temp);

      return $temp;
    }


        function fromSub2Menu($id ,$arr = array()){
          global $conn;

          $sql = 'SELECT * FROM submenu2 WHERE submenu_id='.$id;
          $result = $conn->query($sql);

          $temp = $arr;



          while($row = $result->fetch_assoc()){
            $temp[0] = $row['submenu_title']. " > " .@$temp[0];
            $temp[1] = $row['menu_id'];
          }

          $temp = fromSub1Menu($temp[1],$temp);

          return $temp;
        }
?>
