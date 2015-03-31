<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <title>CranesCrown/shoppinglist</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/megameny.css">
        <link rel="icon" type="image/ico" href="img/favicon.ico">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-3'>
                        <div id="sorting-list">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <h3 class="">FILTER</h3>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingCATAGORY">

                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseCATAGORY" aria-expanded="false" aria-controls="collapseCATAGORY">
                                            <h4 class="panel-title">  Catagory </h4>
                                        </a>

                                    </div>
                                    <div id="collapseCATAGORY" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCATAGORY">
                                        <div class="panel-body ">
                                            <div class="btn-group catagoryDesign " data-toggle="buttons">
                                                <label class="btn filterbtndesign2">
                                                    <input type="radio" name="options" id="option1" autocomplete="off" > <p>JACKOR</p>
                                                </label>
                                                <label class="btn filterBtnDesign">
                                                    <input type="radio" name="options" id="option2" autocomplete="off">  <p>TRÖJA</p>
                                                </label>
                                                <label class="btn filterBtnDesign">
                                                    <input type="radio" name="options" id="option3" autocomplete="off">  <p>BYXOR</p>
                                                </label>
                                                <label class="btn filterBtnDesign">
                                                    <input type="radio" name="options" id="option4" autocomplete="off" > <p> UNDERKLÄDER </p> 
                                                </label>
                                                <label class="btn filterBtnDesign">
                                                    <input type="radio" name="options" id="option5" autocomplete="off">  <p>BADKLÄDER</p>
                                                </label>
                                                <label class="btn filterBtnDesign">
                                                    <input type="radio" name="options" id="option6" autocomplete="off">  <p>HANDSKAR</p>
                                                </label>
                                                <label class="btn filterBtnDesign">
                                                    <input type="radio" name="options" id="option7" autocomplete="off" > <p> SKJORTOR</p>
                                                </label>
                                                <label class="btn filterBtnDesign">
                                                    <input type="radio" name="options" id="option8" autocomplete="off"> <p> KEPSAR</p>
                                                </label>
                                                <label class="btn filterBtnDesign">
                                                    <input type="radio" name="options" id="option9" autocomplete="off"> <p> T-SHIRTS</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel ">
                                    <div class="panel-heading" role="tab" id="headingMARKE">

                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseMARKE" aria-expanded="false" aria-controls="collapseMARKE">
                                            <h4 class="panel-title">    MÄRKE </h4>
                                        </a>

                                    </div>
                                    <div id="collapseMARKE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingMARKE">
                                        <div class="panel-body">
                                            <div class="checkbox checkBoxDesign">
                                                <input id="check1" type="checkbox" name="check" value="check1">
                                                <label for="check1">Björkvin</label>
                                                <input id="check2" type="checkbox" name="check" value="check2">
                                                <label for="check2">Crown</label>
                                                <input id="check3" type="checkbox" name="check" value="check3">
                                                <label for="check3">Crocker Jeans</label>
                                                <input id="check4" type="checkbox" name="check" value="check4">
                                                <label for="check4">Dope</label>
                                                <input id="check5" type="checkbox" name="check" value="check5">
                                                <label for="check5">Lyle & Scott</label>
                                                <input id="check8" type="checkbox" name="check" value="check8">
                                                <label for="check8">Wezc</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingFARG">

                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFARG" aria-expanded="false" aria-controls="collapseFARG">
                                            <h4 class="panel-title">       FÄRG </h4>
                                        </a>

                                    </div>
                                    <div id="collapseFARG" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFARG">
                                        <div class="panel-body" >

                                            <div class="btn-group " data-toggle="buttons">
                                                <label class="btn filterBtnColor" style="background-color: blue;">
                                                    <input type="radio" name="options" id="blue" autocomplete="off" >
                                                </label>
                                                <label class="btn filterBtnColor" style="background-color: red;">
                                                    <input type="radio" name="options" id="red" autocomplete="off" >
                                                </label>
                                                <label class="btn filterBtnColor" style="background-color: green;">
                                                    <input type="radio" name="options" id="green" autocomplete="off" >
                                                </label>
                                                <label class="btn filterBtnColor" style="background-color: yellow;">
                                                    <input type="radio" name="options" id="yellow" autocomplete="off" >
                                                </label>
                                                <label class="btn filterBtnColor" style="background-color: white;">
                                                    <input type="radio" name="options" id="white" autocomplete="off" >
                                                </label>
                                                <label class="btn filterBtnColor" style="background-color: black;">
                                                    <input type="radio" name="options" id="black" autocomplete="off" >
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingPRIS">

                                        <a class="collapsed " data-toggle="collapse" data-parent="#accordion" href="#collapsePRIS" aria-expanded="false" aria-controls="collapsePRIS">
                                            <h4 class="panel-title">       PRIS    </h4>
                                        </a>

                                    </div>
                                    <div id="collapsePRIS" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPRIS">
                                        <div class="panel-body">
                                            <div class="checkbox checkBoxDesign">
                                                <input id="check9" type="checkbox" name="check" value="check9">
                                                <label for="check9">0-100</label>
                                                <input id="check10" type="checkbox" name="check" value="check10">
                                                <label for="check10">100-200</label>
                                                <input id="check11" type="checkbox" name="check" value="check11">
                                                <label for="check11">200-300</label>
                                                <input id="check12" type="checkbox" name="check" value="check12">
                                                <label for="check12">300-400</label>
                                                <input id="check13" type="checkbox" name="check" value="check13">
                                                <label for="check13">400-500</label>
                                                <input id="check14" type="checkbox" name="check" value="check14">
                                                <label for="check14">500-600</label>
                                                <input id="check15" type="checkbox" name="check" value="check15">
                                                <label for="check15">600-700</label>
                                                <input id="check16" type="checkbox" name="check" value="check16">
                                                <label for="check16">700-</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-heading" role="tab" id="headingSTORLEK">

                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSTORLEK" aria-expanded="false" aria-controls="collapseSTORLEK">
                                            <h4 class="panel-title">        STORLEK  </h4>
                                        </a>

                                    </div>
                                    <div id="collapseSTORLEK" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSTORLEK">
                                        <div class="panel-body">
                                            <div class="checkbox checkBoxDesign">
                                                <input id="check17" type="checkbox" name="check" value="check9">
                                                <label for="check9">XS</label>
                                                <input id="check18" type="checkbox" name="check" value="check10">
                                                <label for="check10">S</label>
                                                <input id="check19" type="checkbox" name="check" value="check11">
                                                <label for="check11">M</label>
                                                <input id="check20" type="checkbox" name="check" value="check12">
                                                <label for="check12">L</label>
                                                <input id="check21" type="checkbox" name="check" value="check13">
                                                <label for="check13">XL</label>
                                                <input id="check22" type="checkbox" name="check" value="check14">
                                                <label for="check14">XXL</label>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class='col-sm-9 top-shop'>
                        <div id='content' class="col-sm-12 productslist shopProduct">                        

                            <?php
                            include './showProducts.php';
                            ?>







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