<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="../CSS/stylesheet1.css">
            <title>Shopping Cart</title>        
    </head>
    <body>
        <div>
            <h1>Items in Cart</h1>
        </div>

<?php
        session_start();
        include('config.php');
        $number=$_SESSION['number'];
        $sql="select prodid from orders where number='$number'";
        $prodids=mysqli_query($con,$sql);

        foreach($prodids as $prodid){
            $productid=$prodid["prodid"];
            $productsql="select * from products where prodid='$productid'";
            $products=mysqli_query($con,$productsql);
            foreach($products as $product)
            {
            echo '<div class="itemdetails">
            <div>
                <img src="'.$product["imglink"].'" class="cartimage">
                </div>
                    <div>
                        <p>'.$product["name"].'</p>
                        <p>Price: Rs'.$product["price"].'</p>
                    </div>
                <div>
                </div>
            </div>
            <br>';
        }
    }
?>
    </body>
</html>