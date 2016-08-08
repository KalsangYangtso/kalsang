<?php include "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>User Management System (Tom Cameron for NetTuts)</title>

</head>  
<body>  
    <div id="main">
      
    </div>
   <h1>Member Login</h1>
     
   <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p>
     
   <form method="post" action="insertlogin.php" name="loginform" id="loginform">
    <fieldset>
        <label for="username">Username:</label><input type="text" name="email" id="email" /><br />
        <label for="password">Password:</label><input type="password" name="userpassword" id="userpassword" /><br />
        <input type="submit" name="login" id="login" value="Login" />
    </fieldset>
    </form>
     
 
 

</body>
</html>