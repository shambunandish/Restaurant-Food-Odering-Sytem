<html>
<head>
	<link rel="stylesheet" type=text/css href="menuphp.css">
</head>
<body  background="login.jpg">
<a href="mainpage.php" ><input type="button" id="button"  value="HOME"></a>
<a href="menu.html" ><input type="button"  style="float: right;" id="button" align="right" value="BACK"></a>
<center>
	<div id="htmldiv">
		<div id="htmlsubdiv">
			<center><font color=white><h3><i><B>REVIEW YOUR ORDER!</b></i></h3><center></font>
		</div>
		<table>
			<tr>
				
				<td>
					<center>
						<div id="htmldivleft">
					
						</div>
					</center>
				</td>	
				<td>
					<center>
						<div id="htmldivright">
					
						</div>
					</center>
				</td>	
			</tr>
		</table>
		<div id="total">
		
		</div>
		<a href="pay.html"><button type="button" value="pay"  id="pay">PROCEED</button></a>
	</div>
	
</center>
  

</body>
</html>
<?php
	//$name=;
	//$name1=$_REQUEST["Subject2"];
	$i=0;
	$price=array();
	$errors=array(70,55,80,45,50,80,40,75,45,65);
	$j=-1;
	for($i=0;$i<69;$i++) 
	{	
		if(isset($_REQUEST[$i]))
		{	
			$j++;
			//echo $_REQUEST["$i"].<br/>;
			$price[$_REQUEST["$i"]]=$errors[$j];
			if($j==9)
				$j=-1;
		}
	}
	$sum=0;
	if(count($price)==0)
		echo "
			<script>
			var error=document.createElement('h3');
			var selected=document.getElementById('htmldivleft');
			var error1=document.createElement('h3');
			var selected1=document.getElementById('htmldivright');
			error.textContent='YOU SELECTED';
			selected.appendChild(error);
			
			
			error1.textContent='ZERO ITEMS';
			selected1.appendChild(error1);
			var pay1=document.getElementById('pay');
			pay1.addEventListener('click',alert('PLEASE SELECT ATLEAST ONE ITEM'));
			
		</script>
			
		
		";
	for($p=0;$p<count($price);$p++)
	{	
		$sum+=array_values($price)[$p];
		$u=array_keys($price)[$p];
		$t=array_values($price)[$p];
		echo "
		<script>
			var textleft=document.createElement('h3');
			var textright=document.createElement('h3');
			var divleft=document.getElementById('htmldivleft');
			var divright=document.getElementById('htmldivright');
			textleft.textContent='$u';
			textright.textContent='$t RS';
			divleft.appendChild(textleft);
			divright.appendChild(textright);
			
			//divvv.innerHTML(<h3>$u = $t RS</h3>);
		</script>
		";
	}	
	echo "
		<script>
			var text=document.createElement('h3');
			var total=document.getElementById('total');
			text.textContent='TOTAL IS $sum RS';
			total.appendChild(text);
			
			
		</script>
		
	
	";
	
	
	
	/*echo "<table align=center border=3 cellspacing=30>
		<tr>
			<td>xs</td>
			<td>xs</td>
		</tr>
		
		<tr>
			<td>xs</td>
			<td>xs</td>
		</tr>
</table>";


*/
	
	
		//echo (isset($_REQUEST["Subject2"]))."pani";
	//print_r( "$name and $name1 is u ordered");
	
	



?>
