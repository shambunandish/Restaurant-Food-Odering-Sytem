<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title> User register system using PHP and MySQL </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="hder">
        <h2>Login</h2>
   </div>

   <form method="post" action="login.php">
       <?php include ('errors.php'); ?>
    <div class="input-gp">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-gp">
        <label>Password</label>
        <input type="password" name="password" >
    </div>
    
    <div class="input-gp">
        <button type="submit" name="login" class="btn"> Login </button>
    </div>
    <p> Not yet a member? <a href="register.php"> Sign up</a>
</p>

   
   
   </form>
</body>
</html>