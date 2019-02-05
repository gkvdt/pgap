<?php include_once 'head.php';



if($_GET){
    if($_GET["menu"]!=null || $_GET["menu"]!=""){

        $sql = 'INSERT INTO menu(menu_title) VALUES ("'. $_GET["menu"] .'")';

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);

            return false;
        }



    }else if($_GET){
    ?>
        <script>alert("alanı doldur");</script>
    <?php

    }
}

 ?>


                                    <h3>
                                        Menü Ekle</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 100%">

                                          <form name="myForm" action="" method="get" onsubmit="return chechEmpty();">
                                            <input type="text" name="menu" placeholder="Menu Adi" autocomplete="off">
                                            <br>
                                            <input type="submit" value="Ekle">
                                          </form>

<?php include_once 'footer.php'; ?>
