<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <title>CranesCrown/product</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/megameny.css">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="jquery-1.11.2.min.js"></script>
        <script src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/cartButton.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <div class="jumbotron backgroundheader navbar navbar-default navbar-fixed-top nav-shado">
                <div class="container">
                    <div class=" navbar navbar-static-top navigation">
                        <a class="logo col-sm-5" href="index.php"><h1>Cranes Crown</h1></a>
                        <div class='navigation2 col-sm-7'>
                            <li><a href="index.php">Home</a></li>  
                            <li class="dropdown">

                                <a href="shop.php" class="dropdown-toggle" >Shop<b class="caret"></b></a>                      

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

                            <li><a href="contact.php">Contact</a></li>
                            <?php
                            include "cartDesign.php";
                            ?>
                            <div class="login LS-dropdown">
                                <?php
                                if (isset($_SESSION["user"])) {
                                    if ($_SESSION["user"] != NULL) {
                                        echo "<div class=loggedin>";
                                        echo "Logged in as " . $_SESSION["user"];
                                        echo "</div>";
                                        echo "<form method='POST' action='signout.php'>";
                                        echo "<input type='submit' name='action' value='signout'></input>";
                                        echo "</form>";   
                                    }
                                } else {
                                    echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>Login | Signup<b class='caret'></b></a>";
                                }
                                ?>
                                <div class="dropdown-menu login-menu LS-droppdown">
                                    <div class="row"> 

                                        <div class="col-sm-6 login">
                                            <form method = 'POST' action ='signup.php'>
                                                <h2>Signup</h2>
                                                <h3 class ='user'>Username:</h3>
                                                <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                <h3 class = 'user'>Password:</h3>
                                                <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                <input class = 'productbuttondesign send' type ='submit' name = 'action' value = 'Sign Up'>
                                            </form>
                                        </div>

                                        <div class = 'col-sm-6 login'>
                                            <form method = 'POST' action = 'login.php'>
                                                <h2>Login</h2>
                                                <h3 class = 'user'>Username:</h3>
                                                <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                <h3 class = 'user'>Password:</h3>
                                                <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                <input class = 'productbuttondesign send' type = 'submit' name = 'action' value = 'login'>
                                            </form>
                                            ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="container ">

                <div class="row top-product ">
                    <div class="col-sm-6 ">
                        <div class="col-sm-12 pimg ">
                            <div id="slider1" >
                                <img border="0" src="img/example.jpg"  alt="" />
                                <img  border="0" src="img/example.jpg"  alt="" />
                                <img border="0" src="img/example.jpg"  alt="" />
                            </div>
                            <ul id="thumb"> </ul>
                        </div>
                        <div class="col-sm-12 productslist similarproducts">
                            <p class="similarproductstitle" > <span>Similar Products</span></p>
                            <a href="Product.php">    
                                <div class="col-sm-3">
                                    <img class="img-responsive "href="#" src="img/example.jpg">
                                    <h3>Tophat</h3>
                                    <h4>$449</h4>

                                </div>
                            </a>
                            <a href="Product.php">    
                                <div class="col-sm-3 ">
                                    <img class="img-responsive "href="#" src="img/example.jpg">
                                    <h3>Tophat</h3>
                                    <h4>$449</h4>
                                </div>
                            </a>
                            <a href="Product.php">    
                                <div class="col-sm-3 ">
                                    <img class="img-responsive "href="#" src="img/example.jpg">
                                    <h3>Tophat</h3>
                                    <h4>$449</h4>
                                </div>
                            </a>
                            <a href="Product.php">    
                                <div class="col-sm-3 ">
                                    <img class="img-responsive "href="#" src="img/example.jpg">
                                    <h3>Tophat</h3>
                                    <h4>$449</h4>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-1 sidebar ">
                        <a href="#" class="lightbox lightboxdesign"><p>< ></p></a>
                        <a href="#" class="sharelightbox lightboxdesign2"><p>Share</p></a>
                    </div>




                    <div class="col-sm-5 ">
                        <div class="producttitledesign">
                            <?php
                            echo "<h1>";
                            echo $_POST["name"];
                            echo "</h1>";
                            ?>
                        </div>
                        <div class="col-sm-12 ">

                            <?php
                            echo "<h3>";
                            echo $_POST["price"];
                            echo "$";
                            echo "</h3>";
                            ?>



                        </div>


                        <div>
                            <?php
                            echo "<form method = 'POST' action = 'addToCart.php'>";
                            $_POST["size"] = explode(",", $_POST["size"]);
                            echo "<select class=' productsizebutton productbuttondesignPHP' type='text' name='size'>";
                            foreach ($_POST["size"] as $size) {
                                echo "<option value='" . $size . "'>" . $size . "</option>";
                            }
                            echo "</select>";

                            $_POST["color"] = explode(",", $_POST["color"]);
                            echo "<select class='productLeft productsizebutton productbuttondesignPHP' type='text' name='color'>";
                            foreach ($_POST["color"] as $color) {
                                echo "<option value='" . $color . "'>" . $color . "</option>";
                            }
                            echo "</select>";
                            echo "<input type = 'hidden' name = 'id' value ='" . $_POST['id'] . "' >";
                            echo "<input type = 'hidden' name = 'name' value ='" . $_POST['name'] . "' >";
                            echo "<input type = 'hidden' name = 'price' value ='" . $_POST['price'] . "' >";
                            echo "<input type = 'hidden' name = 'amount' value ='" . $_POST['amount'] . "' >";
                            echo "<button class='addproduct' type='submit' name='action' value='add'>Add</button>";
                            echo "</form>";
                            ?>


                        </div>


                        <div class="panel-heading productbuttondesign" role="tab" id="headingOne">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <p>Product Details</p>
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body productdetails">
                                <h4>Details</h4>
                                <p>En Byxa i snabbtorkande funktionsmaterial som andas. Slim fit. Byxan är delvis tillverkad av återvunnen polyester.</p>
                                <h4>Detaljer</h5>             
                                    <p>Snabbtorkande, 83% polyester, 17% elastan. Maskintvätt 40˚
                                        Art.nr. 47-0779</p>
                            </div>
                        </div>
                        <div class="panel-heading productbuttondesign " role="tab" id="headingTwo">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                <p>Size Guide</p>
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body productdetails">

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>


                            </div>
                        </div>




                    </div>
                </div>

                <div class="backdrop"></div>
                <div class="pbox">
                    <div class="close">x</div>
                    <div class="lightbox-container">

                        <div class="lightbox-slider">
                            <ul class="slides">
                                <li>
                                    <a href="#"><img src="img/example.jpg" /></a>
                                </li>

                                <li>
                                    <img src="img/example.jpg" />
                                </li>

                                <li>
                                    <img src="img/example.jpg" />
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="sharebackdrop"></div>
                <div class="sharepbox">
                    <div class="closeshare">x</div>
                    <div class="sharelightbox-container">
                        <div id="share-buttons">
 
<a href="http://www.facebook.com/sharer.php?u=http://www.simplesharebuttons.com" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
 
<a href="http://twitter.com/share?url=http://www.simplesharebuttons.com&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
 
<a href="https://plus.google.com/share?url=http://www.simplesharebuttons.com" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a>
 
<a href="http://reddit.com/submit?url=http://www.simplesharebuttons.com&title=Simple Share Buttons" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" /></a>
 
<a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://www.simplesharebuttons.com"><img src="http://www.simplesharebuttons.com/images/somacro/email.png" alt="Email" /></a>
 
</div>

                    </div>
                </div>



            </div>




            <div class="jumbotron backgroundfooter">
                <div class="container">

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
                        <ul class="sprite">
                            <li class="Face"><a href="https://facebook.com/"><span>F</span></a></li>
                            <li class="Google"><a href="https://plus.google.com/"><span>G</span></a></li>
                            <li class="Insta"><a href="https://instagram.com/"><span>I</span></a></li>
                            <li class="Twitter"><a href="https://twitter.com/"><span>T</span></a></li>
                            <li class="YouT"><a href="https://youtube.com/"><span>YT</span></a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>

    </body>

</html>