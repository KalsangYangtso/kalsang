<html>
    <head>
        <title>IL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
     

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