<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/stylesheet1.css">
        <link rel="stylesheet" href="../CSS/shoppingstyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="../js/addingtocart.js"></script>
        <title>shop</title>
        <style>
            body{
                background-color: #ffffff;
            }
        </style>
    </head>
    <body>
        
            <div class="headingblock">
                <h1 class="pageheading">Spend your rewards</h1>
                <nav>
                    <a href="http://localhost/iwp/PHP/shoppingcart.php" class="headinglinks">Your Cart</a>
                </nav>
            </div>
            
        
        <div class="noseam">
            <div class="inlineseam">
                <img src="https://images.unsplash.com/photo-1571781926291-c477ebfd024b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80" height="600px">
            </div>
            <div class="inlineseam">
                <img src="https://images.unsplash.com/photo-1629822341708-ce9c9ff950e1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" height="600px">
            </div>
            <div class="inlineseam verticalmid">
                <h3>from skincare to munchies, we've got it all.</h3>
                <h2>use the rewards earnt to get discounts on your favourite brands!</h2>
            </div>
        </div>
        
        
        <!--scroll bar snack-->

        <section class="product"> 
            <div><p align="center">Snacking</p></div>
            <div class="product-container">
                
                <?php
                include('config.php');
                $sqlsnack="select * from products where category='snack'";
                $snacks=mysqli_query($con,$sqlsnack);
                foreach($snacks as $item)
                {
                echo '
                <div class="product-card">
                    <div class="product-image">
                        <img src="'.$item["imglink"].'" class="product-thumb" alt="">
                        <input type="submit" class="card-btn" value="Add to cart" name="'.$item["prodid"].'">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">'.$item["name"].'</h2>
                        <span class="price">Rs'.$item["price"].'</span>
                    </div>
                </div>
                ';
                }
            ?>
            </div>
        </section>
        <!---->
        <br><br>
        <!--scroll bar skincare-->
        <section class="product">
            <div><p align="center">Skincare</p></div>
            <div class="product-container">
            <?php
                include('config.php');
                $sqlsnack="select * from products where category='skinc'";
                $snacks=mysqli_query($con,$sqlsnack);
                foreach($snacks as $item)
                {
                echo '
                <div class="product-card">
                    <div class="product-image">
                        <img src="'.$item["imglink"].'" class="product-thumb" alt="">
                        <input type="submit" class="card-btn" value="Add to cart" name="'.$item["prodid"].'">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">'.$item["name"].'</h2>
                        <span class="price">Rs'.$item["price"].'</span>
                    </div>
                </div>
                ';
                }
            ?>
            </div>
        </section>
        <!---->
        <br><br>

        <!--fashion scroller-->
        <section class="product">
            <div><p align="center">Accessories</p></div>
            <div class="product-container">
            <?php
                include('config.php');
                $sqlsnack="select * from products where category='acces'";
                $snacks=mysqli_query($con,$sqlsnack);
                foreach($snacks as $item)
                {
                echo '
                <div class="product-card">
                    <div class="product-image">
                        <img src="'.$item["imglink"].'" class="product-thumb" alt="">
                        <input type="submit" class="card-btn" value="Add to cart" name="'.$item["prodid"].'">
                    </div>
                    <div class="product-info">
                        <h2 class="product-brand">'.$item["name"].'</h2>
                        <span class="price">Rs'.$item["price"].'</span>
                    </div>
                </div>
                ';
                }
            ?>

            </div>
        </section>        
        <!---->
    </body>
</html>