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


        // echo $email . $userpassword;

        if (isset($_POST['submit'])) {
            //  echo "something submitted.";

            $con = mysqli_connect("localhost", "kay", "dtycts16", "kay");
            if (!$con) {
                echo "something wrong with connection.";
                die("Cannot connect :" . sql_error());
            }

            $sql = "select * from CUSTOMER where email=\"$email\"";
            $result = mysqli_query($con, $sql);
            //echo "query executed: " . $sql . " " . mysqli_num_rows($result) . " rows";

            if (mysqli_num_rows($result) != 1) {
                echo "no data found";
            } else {
                echo "hehhehehehehe";
            }
            if (mysqli_fetch_array($result['userpassword']) == $userpassword) {

                echo "Login successful";
            } else {

                echo $result['email'];
            }
        } else {
            echo "nothing submitted";
        }
        ?>
    </body>
</html> 