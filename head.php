<?php
  include_once "Database/Database.php";
  include_once "util/session.php";

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
        <script src="https://cdn.ckeditor.com/4.11.3/basic/ckeditor.js"></script>

            <script src="js/script.js"></script>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                  <h2>Soru Paneli</h2>

                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Ana Sayfa
                                </a></li>
                            </ul>
                            <!--/.widget-nav-->


                            <ul class="widget widget-menu unstyled">
                                <li><a href="addQuest.php"><i class="menu-icon icon-bold"></i> Soru Ekle </a></li>

                            </ul>


                            <ul class="widget widget-menu unstyled">
                              <li><a href="output.php"><i class="menu-icon icon-bold"></i> Çıktı Al </a></li>

                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">

                                </i>Menü Ekle</a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="addMenu.php"><i class="icon-inbox"></i>Menü Ekle </a></li>
                                        <li><a href="addSubMenu1.php"><i class="icon-inbox"></i>Alt Menü 1 Ekle </a></li>
                                        <li><a href="addSubMenu2.php"><i class="icon-inbox"></i>Alt Menü 2 Ekle</a></li>
                                        <li><a href="addSubMenu3.php"><i class="icon-inbox"></i>Alt Menü 3 Ekle</a></li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">

                            <div class="module">
                                <div class="module-head">
