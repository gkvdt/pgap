<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

    <style>

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: blue;
}
    
    .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4CAF50; /* Green */
        }
    </style>
</head>
<body>

<a href="utils/addMenu.php" class="button button1"> Menü Ekle </a>
<a href="utils/addSubMenu1.php" class="button button1"> Alt Menu1 Ekle </a>
<a href="utils/addSubMenu2.php" class="button button1"> Alt Menu2 Ekle </a>
<a href="utils/addSubMenu3.php" class="button button1"> Alt Menu3 Ekle </a><br>
<a href="utils/EditMenu.php" class="button button1"> Menu Düzenle </a>
<a href="utils/setSubMenu1.php" class="button button1"> Alt Menü1 Düzenle </a>
<a href="utils/setSubMenu2.php" class="button button1"> Alt Menu2 Düzenle </a>
<a href="utils/setSubMenu3.php" class="button button1"> Alt Menu3 Düzenle </a><br>
<a href="utils/addQuest.php" class="button button1"> <h1>Soru Ekle</h1> </a>

    
</body>
</html>