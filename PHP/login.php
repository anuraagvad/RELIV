<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../CSS/stylesheet1.css">
        <link rel="stylesheet" href="../CSS/secondbatch.css">
      </head>
    <body>
        <h1>RELIV</h1>
        <div id="login-page">
            <div class="form">
              <div>
                <div class="login-header">
                <a href="http://localhost/iwp/"> 
                  <h1 style="font-size:30px;">LOGIN</h1>
                </a>
                </div>
              </div>
                <form name="loginform" action="login.php" method="post">
                    <input type="text" placeholder="Phone Number" name="number" required><br><br>
                    <input type="password" placeholder="password" name="pwd" required><br><br>
                    <input  type="submit" value="Login" class="submit" name="enter">
                    <p style="font-size:16px;">Don't have an account? <a href="signin.php">SIGN UP</a></p>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
if(isset($_POST['enter']))
{
  session_start();
  include('config.php');
  $number=$_POST['number'];
  $pwd=$_POST['pwd'];
  $_SESSION['number']=$number;

  $sql="select * from customer_info where number='$number' and password='$pwd'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count=mysqli_num_rows($result);

  if($count == 1){
    header("Location: http://localhost/iwp/PHP/twoway.php");
    die();
  }
  else{
    echo"<p><center> login failed. Invalid email or password</center></p>";
  }
}
?>

