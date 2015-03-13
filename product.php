<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <title>Test</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/test.css">
        <link type="text/css" rel="stylesheet" href="css/navtest.css">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="jquery-1.11.2.min.js"></script>
        <script src="js/jquery.cycle.all.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/cartButton.js"></script>
    </head>
    <body>
        <div id="wrapper">


            <div class="jumbotron backgroundheader navbar navbar-default navbar-fixed-top ">
                <div class="container">
                    <div class=" navbar navbar-static-top navigation">
                        <a class="logo col-sm-2" href="index.php"><h1>LOGO</h1></a>
                        <div class='navigation2 col-sm-10'>
                            <ul>
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
                                            echo "Logged in as " . $_SESSION["user"];
                                            echo "<form method='GET' action='signout.php'>";
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
                                                    <input class = 'send' type ='submit' name = 'action' value = 'Sign Up'>
                                                </form>
                                            </div>

                                            <div class = 'col-sm-6 login'>
                                                <form method = 'POST' action = 'login.php'>
                                                    <h2>Login</h2>
                                                    <h3 class = 'user'>Username:</h3>
                                                    <input name = 'username' type = 'text' placeholder = 'Username' required>
                                                    <h3 class = 'user'>Password:</h3>
                                                    <input name = 'password' type = 'password' placeholder = 'Password' required>
                                                    <input class = 'send' type = 'submit' name = 'action' value = 'login'>
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
            <div class="container">
                <div class="col-lg-12 pheader">
                    <ul>
                        <li>
                            <a href="#">Logo.com</a>
                        </li>
                        /
                        <li>
                            <a href="#">Kön</a>
                        </li>
                        /
                        <li>
                            <a href="#">Byxor</a>
                        </li>
                        /
                        <li>
                            <a href="#">Produkt</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-sm-6 pbild top-product">
                        <div id="slider1" >

                            <img border="0" src="img/img1.jpg"   alt="" />
                            <img border="0" src="img/img2.jpg"  alt="" />
                            <img border="0" src="img/img3.jpg"  alt="" />
                            <img border="0" src="img/img4.jpg"  alt="" />
                            <img border="0" src="img/img5.jpg"  alt="" />
                            <img border="0" src="img/img6.jpg"  alt="" />
                        </div>
                        <ul id="thumb"> </ul>
                        <div class="col-sm-12 likprodukter">
                            <h3>LIKNANDE PRODUKTER</h3>
                            <div class="row">
                                <a href="#">    
                                    <div class="col-sm-3 ">
                                        <img class="img-responsive "href="#" src="http://placehold.it/400x400">
                                        <h5>JEANS</h5>
                                        <h5>BYXOR-MICROSOFT</h5>
                                        <h5>166KR</h5>

                                    </div>
                                </a>
                                <a href="#">  
                                    <div class="col-sm-3 ">
                                        <img class="img-responsive "href="#" src="http://placehold.it/400x400">
                                        <h5>JEANS</h5>
                                        <h5>BYXOR-MICROSOFT</h5>
                                        <h5>166KR</h5>

                                    </div>
                                </a>
                                <a href="#">  
                                    <div class="col-sm-3 ">
                                        <img class="img-responsive "href="#" src="http://placehold.it/400x400">
                                        <h5>JEANS</h5>
                                        <h5>BYXOR-MICROSOFT</h5>
                                        <h5>166KR</h5>

                                    </div>
                                </a>
                                <a href="#">  
                                    <div class="col-sm-3 ">
                                        <img class="img-responsive "href="#" src="http://placehold.it/400x400">
                                        <h5>JEANS</h5>
                                        <h5>BYXOR-MICROSOFT</h5>
                                        <h5>166KR</h5>

                                    </div>
                                </a>


                            </div>
                        </div>

                    </div>
                    <div class="col-sm-1 sidebar top-product">

                    </div>
                    <div class="col-sm-5 pinfos top-product">
                        <div class="col-sm-12 pheadernamn">
                            <?php
                            echo "<h1>";
                            echo $_GET["name"];
                            echo "</h1>";
                            ?>
                        </div>
                        <div class="col-sm-12 pris">
                            <!--<h3>SuperJeans</h3>-->
                            <?php
                            echo "<h3>";
                            echo $_GET["price"];
                            echo "$";
                            echo "</h3>";
                            ?>
                            <div class="col-sm-12"></div>  
                            <div class="panel-heading pbeskrivning" role="tab" id="headingOne">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <p>Produkt Beskrivning</p>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body pbeskrivning2">
                                    <h4>Beskrivning</h4>
                                    <p>En Byxa i snabbtorkande funktionsmaterial som andas. Slim fit. Byxan är delvis tillverkad av återvunnen polyester.</p>
                                    <h4>Detaljer</h5>             
                                        <p>Snabbtorkande, 83% polyester, 17% elastan. Maskintvätt 40˚
                                            Art.nr. 47-0779</p>

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-12">

                            <div class="dropdown knappdesign knappdesignleft"> 
                            </div>
                            <div class="dropdown knappdesign">
                                <?php
                                echo "<form method = 'GET' action = 'addToCart.php'>";
                                $_GET["size"] = explode(",", $_GET["size"]);
                                echo "<select class='productsizebutton productbuttondesignPHP' type='text' name='size'>";
                                foreach ($_GET["size"] as $size) {
                                    echo "<option value='" . $size . "'>" . $size . "</option>";
                                }
                                echo "</select>";

                                $_GET["color"] = explode(",", $_GET["color"]);
                                echo "<select class='productsizebutton productbuttondesignPHP' type='text' name='color'>";
                                foreach ($_GET["color"] as $color) {
                                    echo "<option value='" . $color . "'>" . $color . "</option>";
                                }
                                echo "</select>";
                                echo "<input type = 'hidden' name = 'id' value ='" . $_GET['id'] . "' >";
                                echo "<input type = 'hidden' name = 'name' value ='" . $_GET['name'] . "' >";
                                echo "<input type = 'hidden' name = 'price' value ='" . $_GET['price'] . "' >";
                                echo "<input type = 'hidden' name = 'amount' value ='" . $_GET['amount'] . "' >";
                                echo "<button class='addprodukt' type='submit' name='action' value='add'>Add</button>";
                                echo "</form>";
                                ?>
                            </div>
                            <div class="panel-heading pbeskrivning margintop" role="tab" id="headingTwo">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    <p>Storlekts Guide</p>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body pbeskrivning2">
                                    STOEOREOREORAOAFASDFJDSPFJSFSDFIJ
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "jumbotron backgroundfooter">
                <div class = "container">

                    <div class = "col-sm-4 footercontent">
                        <h2>© 2014 Clothes Store </h2>
                        <p>By David KB, Viktor RT <br>
                            Albin S, Tony T</p>
                    </div>
                    <div class = "col-sm-4 footercontent">
                        <h2>Find us</h2>
                        <p>Adress:</p>
                        <p>City:</p>
                        <p>Phone nr:</p>
                    </div>
                    <div class = "col-sm-4 footercontent">
                        <h2>Follow us</h2>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
