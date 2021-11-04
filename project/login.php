
<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>loginpage</title>
    
    <link rel="stylesheet" href="stylesheet.css">
    
  </head>
  <body>
 
    <form class="first"  method="POST" action="">
      
      <h1 >login</h1>
      <p>username:<input type="text"name="username" id="username" placeholder="username" /></p>
     <input type="password" id="password" name="password" placeholder="password" />
     <input type="submit" value="login" />
      <div class="d-flex justify-content-around align-items-center mb-4">
        <!-- Checkbox -->
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="form1Example3"
            checked
          />
      <label class="form-check-label" for="form1Example3"> Remember me </label><br>
     
        <a href="signup.php">SIGN UP</a>
     
      
        <a href="logout.php">LOGOUT</a>
      

      <a  href="#">Forgot password?</a>
      
    </form>
  </body>
</html>



<?php

echo("hello");
echo("hello");
echo("hello");
echo("hello");
echo("hello");
echo("hello");
echo("hello");
echo("hello");
echo("hello");

?>