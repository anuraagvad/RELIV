<!DOCTYPE html>
    <!--20BCE1606 Vaddi Anuraag-->
<html>
    <head>
        <link rel="stylesheet" href="../CSS/stylesheet1.css">
        <link rel="stylesheet" href="../CSS/twoway.css">
        <title>Welcome</title>
        <style>
            body{
                background-color:#ffffff;
            }
        </style>
    </head>
    <body >
        <div class="header_inner">
            <div class="header_left">
                <a href="logoutscript.php">logout</a>
            </div>
            <div class="header_center"><h1>RELIV</h1></div>
            <?php
                include('config.php');
                session_start();
                $number=$_SESSION['number'];
                $sql="select coins from customer_info where number='$number'";
                $coins=mysqli_query($con,$sql);
                foreach($coins as $row)
                {
                    echo '<div class="header_right"><p align="right">Credits available:'.$row["coins"].'<img src="../imgs/coin-3469.png"></p></div>';  
                } 
            ?>
        </div>
        <table class="level1table">
            <tr>
                <div>
                    <td>
                        <a href="http://localhost/iwp/PHP/shopping.php"><button class="level1button1"><p style="font-size:30px; color: white;">SHOP</p></button></a>
                    </td>
                    
                    <td>
                        <a href="http://localhost/iwp/categories.html"> <button class="level1button2"><p style="font-size:30px; color: white;">RECYCLE</p></button></a>
                    </td>
                </div>
            </tr>
        </table>
        
    </body>
</html>
