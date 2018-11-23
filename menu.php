<?php
	$dbhost="localhost:3306";
	$dbuser="root";
	$dbpass='';//password can be found in config file of sql in apache
	$dbname="dsec";
	//$dbname1="create database sample";
	
	$ex="sample";
	$conn=mysqli_connect($dbhost,$dbuser,$dbpass);
	$sql = "CREATE DATABASE dineout";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
	} else {
		#echo "Error creating database: " . $conn->error;
	}
	if($conn)
	{
		#echo "connected to sample database <br>";
	}
	
	$sql="CREATE TABLE dineout.hotel(
		name1 varchar (20)
	)";
	$name=$_REQUEST["hotel1"];
	$result=mysqli_query($conn,$sql);
	echo "<p style='color:yellow'>WELCOME TO $name</p>";
	echo "
		<script>
		</script>
	";
	$sql="INSERT INTO dineout.hotel(name1)VALUES('$name')";
?>


<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
    <link rel="stylesheet" type=text/css href="menu1.css">
</head>
<body >
	<a href="mainpage.php" ><input type="button" style="float:right" id="button" value="HOME"></a>
	
	<form action="menu1.php" method="post" name="menu" class="main">
	
					<fieldset name="menu" id="fieldmain" class="form1">
					<legend align=center><strong><strong><strong>VEGETARIAN</strong></strong></strong></legend>
                    <fieldset id="fieldset">
					<legend><strong>Chats</strong></legend>
					
					<label><input type="Checkbox" name="1" value="Tomato soup">Tomato Soup</label> <br>
					<label><input type="Checkbox" name="2" value="Pani puri">Pani puri</label><br>
					<label><input type="Checkbox" name="3" value="Aloo 66">Aloo 66</label><br>
					<label><input type="Checkbox" name="4" value="Gobi 66">Gobi 66</label><br>
					<label><input type="Checkbox" name="5" value="Paneer 66">Panner 66</label><br>
					<label><input type="Checkbox" name="6" value="Paneer Tikka">Panner Tikka</label><br>
					<label><input type="Checkbox" name="7" value="Aloo Tikka">Aloo Tikka</label><br>
					<label><input type="Checkbox" name="8" value="Gobi manchurian">Gobi Manchurian</label><br>
					<label><input type="Checkbox" name="9" value="Paneer Manchurian">Panner Manchurian</label><br>
					<label><input type="Checkbox" name="10" value="Pav Bhaji">Pav Bhajji</label><br>
					<label><input type="Checkbox" name="11" value="Spring Rolls">Spring Rolls</label><br>
                    </fieldset>
                    
                    <fieldset id="fieldset">
                            <legend><strong>Gravy</strong></legend>
                            <label><input type="Checkbox" name="11" value="Panner Butter Malasa">Panner Butter Malasa</label><br>
                            <label><input type="Checkbox" name="16" value="Palak Panner">Palak Panner</label><br>
                            <label><input type="Checkbox" name="13" value="Malai Koftha">Malai Koftha</label><br>
                            <label><input type="Checkbox" name="14" value="Panner kadai">Panner kadai</label><br>
                            <label><input type="Checkbox" name="16" value="Veg kadai">Veg kadai</label><br>
                            <label><input type="Checkbox" name="16" value="Veg Kohlapuri">Veg Kohlapuri</label><br>
                            <label><input type="Checkbox" name="17" value="Veg Punjabi">Veg Punjabi</label><br>
                            <label><input type="Checkbox" name="18" value="Peas Masala">Peas Masala</label><br>
                            <label><input type="Checkbox" name="19" value="Kaju Masala">Kaju Masala</label><br>
                            
                    </fieldset>  
                            
                    <fieldset id="fieldset">        
                            <legend><strong>Chaval</strong></legend>
                            <label><input type="Checkbox" name="60" value="Ghee Rice">Ghee Rice</label><br>
                            <label><input type="Checkbox" name="61" value="Jeera rice">Jeera rice</label><br>
                            <label><input type="Checkbox" name="66" value="Veg Biryani">Veg Biryani</label><br>
                            <label><input type="Checkbox" name="63" value="Veg Fried Rice">Veg Fried Rice</label><br>
                            <label><input type="Checkbox" name="64" value="Panner Biryani">Panner Biryani</label><br>
                            <label><input type="Checkbox" name="66" value="Kaju rice">Kaju rice</label><br>
                            <label><input type="Checkbox" name="66" value="Plain rice">Plain rice</label><br>
                            <label><input type="Checkbox" name="67" value="Masala Rice">Masala Rice</label><br>
                            <label><input type="Checkbox" name="68" value="Curd Rice">Curd Rice</label><br>
                    </fieldset>
                    <fieldset id="fieldset">
                            <legend><strong>Breads</strong></legend>
                            <label><input type="Checkbox" name="69" value="Tandoori Roti">Tandoori Roti</label><br>
                            <label><input type="Checkbox" name="30" value="Butter Roti">Butter Roti</label><br>
                            <label><input type="Checkbox" name="31" value="Plain Kulcha">Plain Kulcha</label><br>
                            <label><input type="Checkbox" name="36" value="Butter Kulcha">Butter Kulcha</label><br>
                            <label><input type="Checkbox" name="33" value="Butter Kulcha">Stuffed kulcha</label><br>
                            <label><input type="Checkbox" name="34" value="plain Naan">plain Naan</label><br>
                            <label><input type="Checkbox" name="36" value="Butter Naan">Butter Naan</label><br>
                            <label><input type="Checkbox" name="36" value="Chapati">Chapati</label><br>
                            <label><input type="Checkbox" name="37" value="Paratha">Paratha</label><br>
                            </fieldset>
                </fieldset><br><br>
                        
                <fieldset class="form1">

                            <legend align=center><strong><strong><strong>NON VEGETARIAN</strong></strong></strong></legend>
                            <fieldset id="fieldset">
                            <legend><strong>Chats</strong></legend>
                            
                            <label><input type="Checkbox" name="38" value="Chicken Tikka">Chicken Tikka</label><br>
                            <label><input type="Checkbox" name="39" value="Chicken Tikka Kebab">Chicken Tikka Kebab</label><br>
                            <label><input type="Checkbox" name="40" value="Tandoori Chicken">Tandoori Chicken</label><br>
                            <label><input type="Checkbox" name="41" value="Murgh Dum Pukth">Murgh Dum Pukth</label><br>
                            <label><input type="Checkbox" name="46" value="Murg Toofani Tikka">Murg Toofani Tikka</label><br>
                            <label><input type="Checkbox" name="43" value="Chicken Garlic Kebab">Chicken Garlic Kebab</label><br>
                            <label><input type="Checkbox" name="44" value="Murgh Gongura Kebab">Murgh Gongura Kebab</label><br>
                            <label><input type="Checkbox" name="46" value="Murg Toofani Tikka">Murg Toofani Tikka</label><br>
                            <label><input type="Checkbox" name="46" value="Chicken Kalmi Kebab">Chicken Kalmi Kebab</label><br>
                            <label><input type="Checkbox" name="47" value="Egg Masala">Egg Masala</label><br>
                            <label><input type="Checkbox" name="48" value="Egg Dry">Egg Dry</label><br>
                            </fieldset><br>
                            
                            <fieldset id="fieldset">
                            <legend><strong>Masala Non Veg</strong></legend>
                            <label><input type="Checkbox" name="49" value="Fish Molee">Fish Molee</label><br>
                            <label><input type="Checkbox" name="60"value="Chicken Chettinad">Chicken Chettinad</label><br>
                            <label><input type="Checkbox" name="61" value="Kerala Karimeen Fry">Kerala Karimeen Fry</label><br>
                            <label><input type="Checkbox" name="62" value="Aila Curry">Aila Curry</label><br>
                            <label><input type="Checkbox" name="63" value="Prawns Kuzhambu">Prawns Kuzhambu</label><br>
                            <label><input type="Checkbox" name="64" value="Kori Gassi">Kori Gassi</label><br>
                            <label><input type="Checkbox" name="66" value="Chicken Salna">Chicken Salna</label><br>
                            <label><input type="Checkbox" name="66" value="Crab Masala">Crab Masala</label><br>
                            </fieldset><br>
                            
                            <fieldset id="fieldset">
                            <legend><strong>Rice Paradise</strong></legend>
                            <label><input type="Checkbox" name="67" value="Egg Biryani">Egg Biryani</label><br>
                            <label><input type="Checkbox" name="68" value="Egg Fried Rice">Egg Fried Rice</label><br>
                            <label><input type="Checkbox" name="69" value="Chicken Biryani">Chicken Biryani</label><br>
                            <label><input type="Checkbox" name="60" value="Single Chicken Biryani">Single Chicken Biryani</label><br>
                            <label><input type="Checkbox" name="61" value="Mutton Biryani">Mutton Biryani</label><br>
                            <label><input type="Checkbox" name="62" value="Single Mutton Biryani">Single Mutton Biryani</label><br>
                            <label><input type="Checkbox" name="63" value="Hyderabadi Dum Biryani">Hyderabadi Dum Biryani</label><br>
                            </fieldset><br>
                    
                            
                        
                    </fieldset><br><br>
                    <fieldset class="form3" id="fieldset">
                            <legend><strong><strong>DESERTS</strong></strong></legend>
                            <label><input type="Checkbox" name="64" value="Sweets">Sweets</label><br>
                            <label><input type="Checkbox" name="65" value="Ice Creams">Ice Creams</label><br>
                            <label><input type="Checkbox" name="66" value="Cool Drinks">Cool Drinks</label><br>
                            <label><input type="Checkbox" name="67" value="Milkshakes">Milkshakes</label><br>
                            <label><input type="Checkbox" name="68" value="Frozen Bottle">Frozen Bottle</label><br>
                            <!-- <input type="Checkbox" name="6" value=""><br> -->
                    </fieldset>
                            
                            <br>
                     <input type="submit" name="" value="Submit Here" id="button1"  class="sub"> 
                            <br><br><br>
                           
                        </form>
						
                        
                    
                    </body>
                    </html>
