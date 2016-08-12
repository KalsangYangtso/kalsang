<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>Registration Page</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Bookason</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://www.inft.me/~reymord/index.php">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="http://www.inft.me/~reymord/signin.php">Sign In</a></li> 
                    <li><a href="http://www.inft.me/~reymord/registration.php">Register</a></li> 
                </ul>
            </div>
        </nav>
        <?php
        $servername = "localhost";
        $username = "reymord";
        $password = "dtycts16";
        $dbname = "reymord";


// Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $hash = $_GET['hash'];
        if (!$hash) {
            echo 'Invalid approach, Please use the Link that has been send to your email.';
        } else {
            $sql = "SELECT * FROM CUSTOMER WHERE hash=\"$hash\"";
            
            $check = mysqli_query($conn, $sql);
            if (mysqli_num_rows($check) == 1) {
                
                $array = mysqli_fetch_array($check);
                if ($array['active'] == 1) {
                    echo "You already activated your account";
                } else {
                    
                    $activate = mysqli_query($conn, "UPDATE CUSTOMER SET active='1' WHERE hash=\"$hash\"");
                    echo 'Your Account Has Been Activated Successfully';
                }
            } else {
                echo 'Link is invalid !';
            }
        }
        ?>
    </body>
</html>
