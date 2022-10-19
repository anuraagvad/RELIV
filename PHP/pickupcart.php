<!DOCTYPE html>
<html>
    <head>
            <link rel="stylesheet" href="../CSS/stylesheet1.css">
            <title>Cart</title>        
    </head>
    <body>
        <div>
            <h1>Items to be picked up</h1>
        </div>
    
<form name="amounts" action="pickupcart.php" method="post">

<?php
if(isset($_POST['proceed']))
    {
        session_start();
        $items=$_POST['option'];
        $_SESSION['toberecycled']=$items;
        foreach($items as $item){
        if($item=="plasticcb")
        {
            echo '<div class="itemdetails">
            <div>
                <img src="https://www.plasticsoupfoundation.org/wp-content/uploads/2018/01/recycled-plastic-bottles.jpg" class="cartimage">
                </div>
                    <div>
                        <p>Plastic</p>
                        <p>Approx weight(in grams):</p>
                        <input type="number" id="weight" name="plasticweight">
                    </div>
                    <div>
                        <button class="delete"><img src="../imgs/delete.png" class="delete"></button>
                    </div>
            </div>
            <br>';
        }
        else if($item=="papercb")
        {
            echo '<div class="itemdetails">
            <div>
                <img src="https://recyclingworksma.com/wp-content/uploads/2012/02/Newspaper.jpg" class="cartimage">
                </div>
                    <div>
                        <p>Paper</p>
                        <p>Approx weight(in grams):</p>
                        <input type="number" id="weight" name="paperweight">
                    </div>
                    <div>
                        <button class="delete"><img src="../imgs/delete.png" class="delete"></button>
                    </div>
            </div>
            <br>';
        }
        else if($item=="glasscb")
        {
            echo '<div class="itemdetails">
            <div>
                <img src="https://greatforest.com/wp-content/uploads/2019/03/lacey-williams-175638-unsplash-1024x595.jpg" class="cartimage">
                </div>
                    <div>
                        <p>Glass</p>
                        <p>Approx weight(in grams):</p>
                        <input type="number" id="weight" name="glassweight">
                    </div>
                    <div>
                        <button class="delete"><img src="../imgs/delete.png" class="delete"></button>
                    </div>
            </div>
            <br>';
        }
        else if($item=="ewastecb")
        {
            echo '<div class="itemdetails">
            <div>
                <img src="https://wastematerial.in/wp-content/uploads/2020/12/Household-E-waste-1.jpg" class="cartimage">
                </div>
                    <div>
                        <p>E-Waste</p>
                        <p>Approx weight(in grams):</p>
                        <input type="number" id="weight" name="ewasteweight">
                    </div>
                    <div>
                        <button class="delete"><img src="../imgs/delete.png" class="delete"></button>
                    </div>
            </div>
            <br>';
        }
        else if($item=="battcb")
        {
            echo '<div class="itemdetails">
            <div>
                <img src="https://images.newscientist.com/wp-content/uploads/2018/08/17151541/b8pj8p.jpg" class="cartimage">
                </div>
                    <div>
                        <p>Batteries</p>
                        <p>Approx weight(in grams):</p>
                        <input type="number" id="weight" name="battweight">
                    </div>
                    <div>
                        <button class="delete"><img src="../imgs/delete.png" class="delete"></button>
                    </div>
            </div>
            <br>';
        }
    }}
?>
        <div class="centeritems" style="padding-top:20px;">
            <input type="submit" id="gotopickup" value="Proceed to scheduling a pickup" name="topickup">
        </div>
    </form>
    <?php
        if(isset($_POST['topickup']))
        {
            session_start();
            $items=$_SESSION['toberecycled'];
            $amounts=array();
            foreach($items as $item)
            {
                if($item=="plasticcb"){
                    array_push($amounts,$_POST['plasticweight']);
                }
                else if($item=="papercb"){
                    array_push($amounts,$_POST['paperweight']);
                }
                else if($item=="glasscb"){
                    array_push($amounts,$_POST['glassweight']);
                }
                else if($item=="ewastecb"){
                    array_push($amounts,$_POST['ewasteweight']);
                }
                else if($item=="battcb"){
                    array_push($amounts,$_POST['battweight']);
                }
            }
            $_SESSION['amounts']=$amounts;
            header("Location: http://localhost/iwp/PHP/schdpickup.php");
            exit;
        }
    ?>
    </body>
</html>