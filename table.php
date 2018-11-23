 <html>
	
	<head>
		<strong> <title>BOOK TABLE </title> </strong>
		<link rel="stylesheet" type="text/css" href="tablecss.css">
	</head>
	
	<body class="body" >
		<!-- <table>
			<tr id="menubar">
				<td id="td"><select id="select" > 	
				
					<option id="option" ><b>LOGIN</b><option>
					<option id="option">SIGNUP<option>
					<option id="option">LOGOUT<option>
				
				</select></td>
				<td id="td">TABLE</td>
				<td id="td" style="float:center" >LOGIN</td>
			</tr>
		</table> -->
			
		<a href="mainpage.php"><button id="homebtn" style="float:right">HOME</button></a>
		<a href="table.html">	<button id="backbtn" >BACK</button></a>
		
		<center>
				<div id="div">
					<div id="subdiv">
						<center id="title">
					<span >BOOK TABLE</span>
					<br>
					<br>
					<h1>  	<?php
session_start();
$i=1;
$count=0;
$ct=0;

 if(  (isset($_SESSION['no'])) and $_SESSION['no'] > 2 )    {

    
    
         echo "Please wait for some time , booking is full" ;
        session_unset();
     
}
 else{

  if(isset($_SESSION['no'] ))
    {
        $_SESSION['no']  = $_SESSION['no'] + 1;      
        
		for($i=0;$i<4;$i++){
            if(isset($_REQUEST[$i]))
          {              
			echo "NO of persons booked is".$i."<br> Table No is" .$_SESSION['no'].  "<br> We will be ready at". $_SESSION['no']. ":45 pm"      ;
		  }}
    }

    else{
		for($i=0;$i<4;$i++){
        if(isset($_REQUEST[$i]))
   {             
    $_SESSION['no']=1;
	echo "NO of persons booked is".$i."<br> Table No is" .$_SESSION['no'].  "<br> We will be ready at". $_SESSION['no']. ":30 pm"      ;
   }}
    
}

 }
    
    

?>   </h1>
					</center>
					</div>
				</div>
		</center>

	
<br><br>
	
	</body>
</html>

