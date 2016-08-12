
<html>
    <head>
        <title>Sign In Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="signin.php">Sign In</a></li> 
                    <li><a href="registration.php">Register</a></li> 
                </ul>
            </div>
        </nav>
        <form role="form" class="col-sm-12 col-push-right" action="your_site.php" method="post">
            <div class="col-sm-2 col-push-4 form-group">
                <label for="email">Username:</label>
                <input type="text" class="form-control" name="Custusername" required pattern="[a-z0-9]{3,25}"
                       placeholder="e.g Jhon12" title="Must be longer than 3 letters,and smallest than 25.<br>
                       include numbers in your Username">
            </div>
            <div class="col-sm-2 col-push-4 form-group ">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="Custpassword" required pattern="((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%]).{6,20})"
                       title="Most have Capital letters, Numbers, and Sign(@$#%^)">
            </div>
            <div class="col-sm-2" style="padding-top: 25px;">
                 <input class="button b-success" type="submit" value="submit">
            </div>
        </form>
       

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>
