<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <title>Clothes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/test.css">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <div class="jumbotron backgroundheader navbar navbar-default navbar-fixed-top ">
                <div class="container">
                    <div class=" navbar navbar-static-top navigation">
                        <a class="logo col-sm-2" href="index.html"><h1>LOGO</h1></a>
                        <div class='navigation2 col-sm-10'>
                            <li><a href="index.html">Home</a></li>  
                            <li class="dropdown">

                                <a href="shop.html" class="dropdown-toggle" >Shop<b class="caret"></b></a>                      

                                <ul class="dropdown-menu mega-menu droppdown">

                                    <li class="mega-menu-column ">
                                        <ul>
                                            <li class="nav-header">Kille</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li>    

                                    <li class="mega-menu-column">
                                        <ul>
                                            <li class="nav-header">Tjej</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li> 

                                    <li class="mega-menu-column">
                                        <ul>                            
                                            <li class="nav-header">Barn</li>
                                            <li class="undermen"><a href="#">Hoodie</a></li>
                                            <li class="undermen"><a href="#">T-shirt</a></li>
                                            <li class="undermen"><a href="#">Shirt</a></li>
                                            <li class="undermen"><a href="#">Shorts</a></li>
                                            <li class="undermen"><a href="#">Jeans</a></li>
                                            <li class="undermen"><a href="#">Trousers</a></li>
                                        </ul>
                                    </li> 

                                </ul>


                            </li>

                            <li><a href="contact.html">Contact</a></li>
                            <li class="login dropdown1">


                                <?php
                                include 'showCart.php';
                                echo "<a href='killCart.php'>Delete All</a>";
                                include 'signout.php';
                                include 'loggedin.php';
                                ?>
                                <ul class="dropdown-menu login-menu droppdown1">
                                    <div class="row"> 

                                        <div class="col-sm-6 login">
                                            <h2>Sign Up</h2>
                                            <h3 class="user">Username:</h3> 
                                            <input type="text" name="username" value="">
                                            <h3 class="user">Password:</h3>
                                            <input type="text" name="password" value="">
                                            <input class="send" type="submit" value="Submit">
                                        </div>
                                        <div class="col-sm-6 login">
                                            <h2>Login</h2>
                                            <h3 class="user">Username:</h3> 
                                            <input type="text" name="FirstName" value="">
                                            <h3 class="user">Password:</h3>
                                            <input type="text" name="LastName" value="">
                                            <input class="send" type="submit" value="Submit">
                                        </div>
                                    </div>
                                </ul>
                            </li>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container">
                <div class="slider">
                    <img class="img-responsive img"href="#" src="img/suit.jpg">
                </div>
                <div class="row">
                    <div class="col-sm-4 underslider">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Male</h3>
                    </div>
                    <div class="col-sm-4 underslider">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Female</h3>
                    </div>
                    <div class="col-sm-4 underslider">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Children</h3>
                    </div>
                </div>

                <ul class="nav nav-tabs indexproduktnav">
                    <li><a href="#">Best Selling</a></li>
                    <li><a href="#">Sale</a></li>
                    <li><a href="#">New Products</a></li>        
                </ul>

                <div class="row">
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Male</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Female</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Children</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Male</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Female</h3>
                    </div>
                    <div class="col-sm-4 indexprodukt">
                        <img class="img-responsive img"href="#" src="img/janne.jpg">
                        <h3>Children</h3>
                    </div>
                </div>
            </div>
            <div class="jumbotron backgroundfooter">
                <div class="container navbar">

                    <div class="col-sm-4 footercontent">
                        <h2>© 2014 Clothes Store </h2>
                        <p>By David KB, Viktor RT <br>
                            Albin S, Tony T</p>
                    </div>
                    <div class="col-sm-4 footercontent">
                        <h2>Find us</h2>
                        <p>Adress:</p>
                        <p>City:</p>
                        <p>Phone nr:</p>
                    </div>
                    <div class="col-sm-4 footercontent">
                        <h2>Follow us</h2>
                    </div>

                </div>
            </div>
            <script>
                jQuery(document).ready(function() {
                    $(".dropdown").hover(
                            function() {
                                $('.dropdown-menu', this).fadeIn("fast");
                            },
                            function() {
                                $('.dropdown-menu', this).fadeOut("fast");
                            });
                });
            </script>
        </div>
    </body>
</html>