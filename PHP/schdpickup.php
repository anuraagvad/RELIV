<!DOCTYPE html>
<html>
<head>
    <title>Shipping Details</title>
    <link rel="stylesheet" href="../CSS/stylesheet1.css">
</head>
<body> 
<h1 >Enter Shipping Details</h1>     
<div class="bgcolor">
    <form action="schdpickup.php" method="post">
    <div>
    <table cellspacing="35px">
        <tr>
        <td><label for="name">Enter your name</label>
        <input name="name" type="text" id="name" placeholder="Enter your Name" >
        </td>
        
        <td>
        <label for="phno">Enter your phone number<label>
        <input name="phno" type="text" id="phno" placeholder="Ex 9555443765" size ="10">
        </td>
        </tr>

        <tr>
            <td>
                <label for="address">Enter your Address</label>
                <input name="address" type="text" id="address" placeholder="8 Sastri Nagar">
            </td>
            <td>
                <label for="city">Enter your city </label>
                <input name="city" type="text" id="city" placeholder="Ex Chennai">
            </td>
            <td>
                <label for="state">Enter your State </label>
                <input type="text" id="state" placeholder="Ex Kerala" name="state">
            </td>

        </tr>
        <tr>
            <td>
                Enter 6 digit pincode
                <input type="text" id="pin" placeholder="Ex 600021" size="6" name="pin"><br>
            </td>
        </tr>
        <tr>
            <td>
                <b>Enter preferred delivery type:</b> 
            </td>
        </tr>
        
        <tr>
            <td>

                <input type="radio" id="work" name="locationtype" value="work">
                <label for="work">Work (9AM-5PM)</label>
                
            </td>
            <td>
                <input type="radio" id="home" name="locationtype" value="home">
                <label for="home">Home(8AM-7PM)</label>
            </td>
        </tr>
        <tr>
            <td>
                <b>Prefrred payment type</b>
            </td>
        </tr>
        <tr>    
            <td>
                <input type="radio" id="cash" name="payment" value="cod">
                <label for="cash">Cash on delivery</label>
            
            </td>
            <td>
                <input type="radio" id="credit" name="payment" value="card">
                <label for="credit">Credit Card</label>
            </td>
            <td>
                <input type="radio" id="net" name="payment" value="netbank">
                <label for="net">Net Banking</label>
            </td>
        </tr>
    </table>
    <div class="centeritems">
        <button class="submit" align="center" name="confirm"><p>Confirm Pickup</p></button>    
    </div>
</form>
</div>
<?php
    if(isset($_POST['confirm']))
    {
        session_start();
        include('config.php');
        $amounts=$_SESSION['amounts'];
        $items=$_SESSION['toberecycled'];
        $orderdescription="";
        for($x=0;$x<sizeof($amounts);$x++)
        {
            $orderdescription=$orderdescription.$amounts[$x]."grams of ".$items[$x]." ";
        }
        $number=$_SESSION['number'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $pin=$_POST['pin'];
        $deltype=$_POST['locationtype'];
        $pay=$_POST['payment'];
        $state=$_POST['state'];
        $name=$_POST['name'];
        $sql="INSERT INTO pickuplogs VALUES ('$number','$address','$pin','$city','$deltype','$pay','$state','$orderdescription','$name')";
        $insert=mysqli_query($con,$sql);
        header("Location: http://localhost/iwp/twoway.html");
        exit;
    }
?>
</body>
</html>