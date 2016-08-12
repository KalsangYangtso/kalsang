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

    $Custusername = $_POST['Custusername'];
    $firstname = $_POST['firstname'];
    $Custpassword = $_POST['Custpassword'];

    $sql = "SELECT * FROM `CUSTOMER` WHERE Custusername = '" . $Custusername . "' AND Custpassword = '" . $Custpassword . "'";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Welcome " . $row['firstname'];
            
        }
    } else {

        echo "incorrect Information Go Back to Sign In page";
    }
    mysqli_close($conn);
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>