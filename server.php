<?php
    session_start();
    $username="";
      $email="";
    // $password_1="";
    // $password_2="";
    $errors=array();
    
    $db= mysqli_connect('localhost','root','','registration');
    
    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password_1 = $_POST['password_1'];
        $password_2 = $_POST['password_2'];
    
    
        if(empty($username))  {
            array_push($errors,"Username is required");
        } 
        if(empty($email))  {
            array_push($errors,"email is required");
        }
        if(empty($password_1))  {
            array_push($errors,"password is required");
        }
        if($password_1 != $password_2){
            array_push($errors,"Two passwords do not match");
        }

        
        if(count($errors)==0) {
            $password = md5($password_1);  //encryption before storing.
            $sql="INSERT INTO users (username,email,password) 
                VALUES ('$username' , '$email' , '$password')";
            mysqli_query($db,$sql);

            $_SESSION['username']=$username;
            $_SESSION['success']="You are now logged in";
            header('location: index.php'); //redirects to home
        }
                
    }
        if(isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
        
            if(empty($username))  {
                array_push($errors,"Username is required");
            } 
           
            if(empty($password))  {
                array_push($errors,"password is required");
        }
            if(count($errors) == 0 ){
                $password = md5($password);
                $query=" SELECT * FROM users WHERE username='$username' AND password='$password'";
                $result=mysqli_query($db,$query);
                if(mysqli_num_rows($result) == 1) {
                    $_SESSION['username']=$username;
                    $_SESSION['success']="You are now logged in";
                    header('location: index.php'); //redirects to home
                }
                else {
                    array_push($errors,"enter the correct usrname and passwrd");
                    // header('location: login.php');
                }
            
            }
    }


if(isset($_GET['logout']))  {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>