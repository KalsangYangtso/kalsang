<html>
    <head>
        <title>IL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <?php
      include'dbhanler.php';
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['email']))
{
     ?>
 
     <h1>Member Area</h1>
     <p>Thanks for logging in! You are <code><?=$_SESSION['email']?></code> and your email address is <code><?=$_SESSION['email']?></code>.</p>
      
     <?php
}
elseif(!empty($_POST['email']) && !empty($_POST['userpassword']))
{
    $email = mysql_real_escape_string($_POST['email']);
    $userpassword = md5(mysql_real_escape_string($_POST['userpassword']));
     
    $checklogin = mysql_query("SELECT * FROM CUSTOMER WHERE email = '".$email."' AND userpassword = '".$userpassword."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['email'];
         
        $_SESSION['email'] = $email;
   
        $_SESSION['LoggedIn'] = 1;
         
        echo "<h1>Success</h1>";
        echo "<p>We are now redirecting you to the member area.</p>";
        echo "<meta http-equiv='refresh' content='=2;index.php' />";
    }
    else
    {
        echo "<h1>Error</h1>";
        echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
    }
}
else
{
    echo'';
}
    ?>

        <?php
        $con = mysql_connect("localhost", "kay", "dtycts16");
        if (!$con) {
            die("Connection failed:" . mysqli_connect_error());
        }

        $email = $_POST['email'];
        $userpassword = $_POST['userpassword'];


        if(isset($_POST['Login']))
        {
            $con =  mysql_connect("localhost","kay","dtycts16");
                    if(!$con){
                        die("Cannot connect :" .sql_error());
                        
                    }
                       mysql_select_db("kay", $con);
            $sql = "select * from CUSTOMER where email=='$email' and  userpassword ='$userpassword')";
            $result = mysqli_query($con, $sql);
            if (!$row = mysqli_fetch_assoc($result)) {
                echo "Login information incorrect";
                
            } else {
                echo "Login successful";
            
            }
        }
            header("Location:inhome.php");
        
        ?>
    </body>
</html> 