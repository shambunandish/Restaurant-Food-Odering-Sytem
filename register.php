<?php include('server.php');  ?>
<!DOCTYPE html>
<html>
<head>
    <title> User register system using PHP and MySQL </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href="mainpage.php" ><input type="button" id="button" style="float: right;" value="HOME"></a>
<a href="mainpage.php" ><input type="button"   id="button"  value="BACK"></a>
    <div class="hder">
        <h2>Register</h2>
   </div>
   

   <form method="post" action="register.php">
       <!-- disp err -->  
       <?php  include ('errors.php'); ?>
    <div class="input-gp">
        <label>Username</label>
        <input type="text" name="username"   >
    </div>
    <div class="input-gp">
        <label>Email</label>
        <input type="text" name="email"  >
    </div>
    <div class="input-gp">
        <label>Password</label>
        <input type="password" name="password_1" >
    </div>
    <div class="input-gp">
        <label>confirm password</label>
        <input type="password" name="password_2" >
    </div>

    <div class="input-gp">
        <button type="submit" name="register" class="btn"> Register </button>
    </div>
    <p> Already a member? <a href="login.php"> Sign in</a>
</p>

   
   
   </form>
</body>
</html>