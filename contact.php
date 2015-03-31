<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <title>CranesCrown/Contact</title>
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

            <div class="container Con">
                <form action="" method="post" class="dark-matter">
                    <h1>Welcome 
                        <span>Fill in the questions if you want to refund a product.</span>
                    </h1>
                    <label>
                        <span>Your Name :</span>
                        <input id="name" type="text" name="name" placeholder="Your Full Name" />
                    </label>

                    <label>
                        <span>Your Email :</span>
                        <input id="email" type="email" name="email" placeholder="Your Email Address" />
                    </label>

                    <label>
                        <span>Message :</span>
                        <textarea id="message" name="message" placeholder="Your message/refund explanation to Us"></textarea>
                    </label> 
                    <label>
                        <span>Refund : </span><select name="selection">
                            <option value="placeholder">Which article of clothing, do you want to refund?</option>
                            <option value="Hoodie">Hoodie</option>
                            <option value="T-shirt">T-shirt</option>
                            <option value="Shirt">Shirt</option>
                            <option value="Shorts">Shorts</option>
                            <option value="Jeans">Jeans</option>
                            <option value="Trousers">Trousers</option>
                        </select>
                    </label>    
                    <label>
                        <span id="button"></span> 
                        <input type="button" class="productbuttondesign send" value="Send" /> 
                    </label>    
                </form>
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
            <script>
                jQuery(document).ready(function () {
                    $(".dropdown").hover(
                            function () {
                                $('.dropdown-menu', this).fadeIn("fast");
                            },
                            function () {
                                $('.dropdown-menu', this).fadeOut("fast");
                            });
                });
            </script>
        </div>
    </body>
</html>