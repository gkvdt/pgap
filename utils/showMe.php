<?php 

    include_once '../Database/Database.php';



    ?>
        
        <html>
  <head>
  <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/stil.css">
    <script src="../js/script.js"></script>
  </head>
  <body>
  <a href="../" class="button button1"> Ana Menü </a>
    <div>

    <?php




    if($_GET['kategori_id'] != "" || $_GET['kategori_id'] != null){
        
        $sql = 'SELECT * FROM sorular WHERE menu_id="'.$_GET['kategori_id'] .'"';
        
{
        ?>

<table>
  <tr>
    <th>Soru</th>
    <th>A</th>
    <th>B</th>
    <th>C</th>
    <th>D</th>
    <th>E</th>

    <th>Cevap</th>
    <th>#</th>
    <th>#</th>
  </tr>
  <?php

    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
  ?>
  <tr>
    <td><?php echo $row['soru'] ?></td>
    <td><?php echo $row['a'] ?></td>
    <td><?php echo $row['b'] ?></td>
    <td><?php echo $row['c'] ?></td>
    <td><?php echo $row['d'] ?></td>
    <td><?php echo $row['e'] ?></td>
    <td><?php echo $row['cevap'] ?></td>
    <td><a href='editQuest.php?soru_id=<?php echo $row['id'] ?>'>Düzenle</a></td>
    <td><a href='deleteQuest.php?soru_id=<?php echo $row['id'] ?>'>Sil</a></td>
  </tr>
    <?php } ?>
</table>

        <?php
    }


    }else{
        ?>

        <script>
            alert("hata meydana geldi bu durumu bana bildir");
        </script>
        <?php 
    }



    ?>
        
</div>
  </body>
</html>




    <?php
