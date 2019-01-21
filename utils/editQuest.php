
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
  <a href="../" class="button button1">Ana menu </a>
    <div>

    <?php
    if($_GET['soru_id']!="" || $_GET['soru_id']!=null ){

        $sql = 'SELECT * FROM sorular WHERE id='. $_GET['soru_id']; ;
        $result = $conn->query($sql);
    
        while($row = $result->fetch_assoc()){

?>

<form name="myForm" action="updateQuest.php" method="get" onsubmit="return chechEmpty();">
        Soru:<input type="text" name="soru" value="<?php echo $row['soru']; ?>" placeholder="Soru" autocomplete="off">
        A:<input type="text" name="a" value="<?php echo $row['a']; ?>" placeholder="A şıkkı" autocomplete="off">
        B:<input type="text" name="b" value="<?php echo $row['b']; ?>" placeholder="B şıkkı" autocomplete="off">
        C:<input type="text" name="c" value="<?php echo $row['c']; ?>" placeholder="C şıkkı" autocomplete="off">
        D:<input type="text" name="d" value="<?php echo $row['d']; ?>" placeholder="D şıkkı" autocomplete="off">
        E:<input type="text" name="e" value="<?php echo $row['e']; ?>" placeholder="E şıkkı" autocomplete="off">
        Aciklama:<input type="text" name="aciklama" value="<?php echo $row['aciklama']; ?>" placeholder="Soru Açıklaması (Boş Bırakılabilir)" autocomplete="off">
        Cevap:<select name="cevap">
            <option value="1"
            <?php if($row['cevap'] ==1 ){echo 'selected';} ?>
            >A</option>
            <option value="2"
            <?php if($row['cevap'] ==2 ){echo 'selected';} ?>
            >B</option>
            <option value="3"
            <?php if($row['cevap'] ==3 ){echo 'selected';} ?>
            >C</option>
            <option value="4"
            <?php if($row['cevap'] ==4 ){echo 'selected';} ?>
            >D</option>
            <option value="5"
            <?php if($row['cevap'] ==5 ){echo 'selected';} ?>
            >E</option>
        
        </select>
        <input type="hidden" name="soru_id" value="<?php echo $_GET['soru_id'] ?>">
        <input type="submit">
      </form>






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