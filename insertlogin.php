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
        session_start();
              if (isset($_POST['Login'])) {
      
        include_once ('db.php');

  

            $email = strip_tags($POST_['email']);
            $userpassword = strip_tags($POST_['userpassword']);

            $email = stripslashes($email);
            $userpassword = stripslashes($userpassword);

            $email = mysqli_real_escape_string($kay, $email);
            $userpassword = mysqli_real_escape_string($kay, $userpassword);
            
            $userpassword = md5($userpassword);
            $sql = "SELECT * FROM CUSTOMER where email ='$email' LIMIT 1";
            $query = mysqli_query($kay, $sql);
            $row = mysqli_fetch_array($query);
            $db_userpassword = $row['userpassword'];

            if ($userpassword == $kay_userpassword) {
                $_session['email'] = $email;
          
                header("Location: home.php");
            } 
            else {
                echo "Invalid Information";
            }
        }
       
        ?>
    </body>
</html> 

