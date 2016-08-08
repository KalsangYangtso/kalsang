<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
             <div class="navi">
            <a href="home.php">Home</a>
            <a href="registration.php">Registration</a>
            <a href="login.php">Login</a>
            <a href="cart.php">Cart</a>
            
        </div>
        <fieldset>
            <legend>Registration</legend>
        <form action="insertregister.php" method="POST">
            User Email:<br /><input type="text" name="email"><br />
            User Password:<br /><input type="password" name="userpassword"><br />
             <br /><input type="submit" name="submit" value="Register"><br />
        </form>
            </fieldset>
       
    </body>
</html>
