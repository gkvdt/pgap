<html>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/stil.css">
    <script src="js/script.js"></script>
  </head>
  <body>
    <div>
      <form name="myForm" action="Database/get.php" method="get" onsubmit="return chechEmpty();">
        <input type="text" name="ders_id" placeholder="ders_id" autocomplete="off">
        <input type="text" name="yil" placeholder="yil" autocomplete="off">
        <input type="text" name="soru" placeholder="soru" autocomplete="off">
        <input type="text" name="a" placeholder="a" autocomplete="off">
        <input type="text" name="b" placeholder="b" autocomplete="off">
        <input type="text" name="c" placeholder="c" autocomplete="off">
        <input type="text" name="d" placeholder="d" autocomplete="off">
        <input type="text" name="e" placeholder="e" autocomplete="off">
        <input type="submit">
      </form>
    </div>
  </body>
</html>
