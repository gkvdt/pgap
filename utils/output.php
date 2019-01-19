<?php
/*
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "kpss";

  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }else {
    // code...
    echo "Connected successfully";
  }
*/
  function writeJson(){
      echo "[";
      for ($i =0 ; $i<10;$i++)  {
          echo '{"ders_id":1,"yil":1,"soru":"asdasd","a":"a","b":"b","c":"c","d":"d","e":"e","cevap":1},';
      }
      echo '{"ders_id":1,"yil":1,"soru":"asdasd","a":"a","b":"b","c":"c","d":"d","e":"e","cevap":1}';


      echo "]";
  }
  writeJson();
