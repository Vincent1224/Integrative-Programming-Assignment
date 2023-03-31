<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
    require_once 'header.php';
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/home.css" rel="stylesheet" type="text/css"/>
        <title>Home Page</title>
        <style>
            body{
                position: relative;
            }
     
        </style>
    </head>
    <body>
        <div class="home-body">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/slider/laidcamp1.jpg" alt="First slide" height="500px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider/laidcamp1.jpg" alt="Second slide" height="500px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/slider/laidcamp1.jpg" alt="Third slide" height="500px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
<!--            <div class="shopsBtnGrp">
                <div class="men">
                    <a href="userRegister.php" style="text-decoration: none;">Register Here</a>
                </div>
                <div class="women">
                    <a href="userRegister.php" style="text-decoration: none;">Register Here</a>
                </div>
                <div class="kid">
                    <a href="userRegister.php" style="text-decoration: none;">Register Here</a>
                </div>
            </div>-->
        
        <div class="productVideo">
            <video width="100%" height="100%" autoplay="autoplay" loop="true" muted defaultmuted>
                <source src="video/homeVideo.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
            </video>
            <a href="productMen.php" class="overlay-link" id="men" style="text-decoration: none;">Men</a>
            <a href="#" class="overlay-link" id="women" style="text-decoration: none;">Women</a>
            <a href="#" class="overlay-link" id="kid" style="text-decoration: none;">Kids</a>
                
        </div>
        </div>
        <?php
        require_once 'footer.php';
        ?>
    </body>
    
    
    
    </html>
