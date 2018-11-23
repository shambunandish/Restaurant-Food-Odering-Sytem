<?php include('server.php'); 
   
?>
<!DOCTYPE html>
<html>
<head>
    <title> User register system using PHP and MySQL </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="hder">
        <h2>Homepage</h2>
   </div>

    <div class="content">
        <?php if(isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    

    <?php if(isset($_SESSION["username"])) : ?>
        <p> Welcome <strong> <?php echo $_SESSION['username']; ?>  </strong> </p>
        <p> <a href="index.php?logout='1' " style="color:red;"> Logout </a> </p> 
        <?php endif ?>
    </div>
   <script>
   
		setTimeout(foo,1500);
   
		function foo() {
			location.href="mainpagelogin.php";
		}
</script>
   </script>
</body>
</html>