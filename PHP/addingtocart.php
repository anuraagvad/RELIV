<?php
    session_start();
    include('config.php');
    $number=$_SESSION['number'];
    $prodid=$_POST['text'];
    
    $sql="INSERT INTO orders VALUES ('$number','$prodid')";
    mysqli_query($con,$sql);
?>