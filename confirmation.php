<head>
    <title>Confirmation Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Bookason</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://www.inft.me/~reymord/index.php">Home</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="products.php">Products</a></li> 
                <li><a href="checkout.php">Checkout</a></li> 
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

    // Escape user inputs for security
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $Custusername = $_POST['Custusername'];
    $email = $_POST['email'];
    $Custpassword =$_POST['Custpassword'];
    $hash = md5(rand(0, 1000));
    

    $sql = ("INSERT INTO CUSTOMER (firstname, lastname, Custusername, email, Custpassword, hash, active)
            Values(\"$firstname\", \"$lastname\", \"$Custusername\", \"$email\",\"$Custpassword\",\"$hash\",'0')");

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !<br> Please Check your ($email) and Click on the link at the bottom to Activate your Account";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $to = $email; // Send email to our user
    $subject = 'Signup | Verification'; // Give the email a subject 
    $message = '
 
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
 
------------------------
Username: ' . $Custusername . '
Password: ' . $Custpassword . '
------------------------
 
Please click this link to activate your account:
http://inft.me/~reymord/verify_email.php?hash=' . $hash . '
 
'; // Our message above including the link

    $headers = 'From:noreply@bookason.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email

    mysqli_close($conn);
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>