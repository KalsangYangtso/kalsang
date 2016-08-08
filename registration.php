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
        <fieldset>
            <legend>Registration</legend>
        <form action="registration.php" method="POST">
            User Email:<br /><input type="text" name="email"><br />
            User Password:<br /><input type="password" name="userpassword"><br />
             <br /><input type="submit" name="submit" value="Register"><br />
        </form>
            </fieldset>
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
