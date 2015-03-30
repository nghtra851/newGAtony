<li>
    <a href="#" class="cartlightbox cartlightboxdesign">
        <img src="img/CART.png">
        <?php
        if(isset($_SESSION["cart"])){
        echo count($_SESSION["cart"]); 
        }
        
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
               <button class="productbuttondesign buyButton" type='submit'>Buy</button>
            </div>
        </div>
    </div>
</li>