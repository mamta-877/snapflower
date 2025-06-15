<?php
include "connection.php";
?>
<html>
<head>
    <title>Snap Flower:A Weblog Photography Site</title>
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="css/bootstrap-grid.min.css" type="text/css" rel="stylesheet"/>
    <link href="sheet.css" type="text/css" rel="stylesheet"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    $(document).ready(function(){
      AOS.init();
      });
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row text-center pt-4" id="head">
            <div class="col-md-3">
                <h3>Snap Flower</h3>
            </div>
            <div class="col-md-7 link">
                <ul class="nav">
                    <li><a class="nav-link" href="dhome.php">HOME</a></li>
                    <li><a class="nav-link" href="about.php">ABOUT</a></li>
                    <li><a class="nav-link" href="port.php">PORTFOLIO</a></li>
                    <li><a class="nav-link" href="work.php">WORKS</a></li>
                    <li><a class="nav-link" href="blog.php">BLOG</a></li>
                    <li><a class="nav-link" href="contact.php">CONTACT</a></li>
                </ul>
            </div> 
            <div class="col-md-2">
                <i class="fa fa-search" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-user-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa fa-heart-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>   
        </div>
    </div>