<html>
    <head>
        <title>IR</title>
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
   
<?php
        if(isset($_POST['submit']))
        {
            $con =  mysql_connect("localhost","kay","dtycts16");
                    if(!$con){
                        die("Cannot connect :" .sql_error());
                        
                    }
                    mysql_select_db("kay", $con);
                    $sql= "INSERT INTO CUSTOMER (email, userpassword) VALUES ('$_POST[email]', '$_POST[userpassword]')";
                    mysql_query($sql, $con);
                    mysql_close($con);
        }
        ?>
 </body>
</html> 

