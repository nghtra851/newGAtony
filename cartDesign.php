<li>
    <a href="#" class="cartlightbox cartlightboxdesign">
        <img src="img/CART.png">
        <?php
        echo count($_SESSION["cart"]);
        ?>
    </a>
    <div class="cartpbox">
        <div class="cartlightbox-container">
            <div class="cartDesign">
                <div class="closecart">
                    x
                </div>
                <?php
                include 'showCart.php';
                ?>
            </div>
        </div>
    </div>
</li>