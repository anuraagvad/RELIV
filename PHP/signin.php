<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <link rel="stylesheet" href="reg.css">
    </head>
    <body>
      <h1>RELIV</h1>
        <div id="signin-page">
            <div class="form">
              <div>
                <div >
                  <h1 style="font-size:30px;">SIGN IN</h1>
                  <p>Create an Account</p>
                </div>
              </div>
                <form action="signin.php" method="post" name="form">
                    <input type="text" placeholder="name" name="name"><br><br>
                    <input type="text" placeholder="mobile number" name="number" required><br><br>
                    <input type="text" placeholder="emailID" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br><br>
                    <input type="password" placeholder="password" name="password"><br><br>
                    <input type="submit" value="SignUp" name="create">
                    <p class="misc">Have an account? <a href="login.php">LOGIN IN</a></p>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
if(isset($_POST['create']))
{
  include('config.php');
  $number=$_POST[number];
  $name=$_POST[name];
  $mail=$_POST[mail];
  $pwd=$_POST[password];

  $sql="insert into customer_info (number,name,mail,password) values ('$number', '$name','$mail','$pwd')";

  if(mysqli_query($con,$sql)) 
  {
    echo"<h1>account created succesfully, redirecting to login</h1>";
    header("Location: http://localhost/iwp/PHP/login.php");
    die();
  }
}
?>