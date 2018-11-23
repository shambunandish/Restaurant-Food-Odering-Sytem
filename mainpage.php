


<html>
<head>
	<title>Reserve your table for free</title>
	<link rel="shortcut icon" href="icon.jfif">
	<link rel="stylesheet" type=text/CSS href="main_pagecss.css">
</head>
<body bgcolor=#e6e6e6>
<div class="sticky"><h1  id="tile"><b><u><i>DINEOUT</u></i></b></h1> </div>
	<a href="register.php">	<input style="float:right" id="login" type="button" value="LOGIN"></a>
	<a href="table.html">	<input style="float:right; width:200px" id="login" type="button" value="Table booking" align="right"></a>
			<a href="new_1.html">	<input style="width:200px" id="login" type="button" value="Party booking" ></a>

<fieldset id="home">
		
				<div class="image" >

				</div>
</fieldset>








<script>
	setInterval(img,2500);
	setInterval(img1,5000);
	setInterval(img2,7500);
	
	function makedelay(millisec)
	{
		var start= new Date().getTime();
		var end=start;
		while(end < start + millisec )
			end= new Date().getTime();
	}
	function img()
	{
		var img=document.getElementById("home");
		home.setAttribute("style",'background-image:url(startimg2.png);');
		
	}
	
	function img1()
	{
		var img=document.getElementById("home");
		home.setAttribute("style",'background-image:url(startimg3.png);');
		
	}
	
	function img2()
	{
		var img=document.getElementById("home");
		home.setAttribute("style",'background-image:url(startimg1.png);');
		//makedelay(2);
		//home.setAttribute("style",'background-image:url(startimg3.png);');
		//makedelay(2);
		//home.setAttribute("style",'background-image:url(startimg1.png);');
	}
</script>





	<marquee direction="left"><h2 class="text" style=color:green align=center><pre>RESERVE TABLE FOR FREE!														
				<b><i>ENJOY THE SPECIAL OCCASSION BY BOOKING A HALL AT <font color="red">ATTRACTIVE PRICES</font>!!</i></b></pre></h2></marquee>

		<marquee direction="right" ><font color=rgb(255, 128, 170)><img src="advertise.png" align="center" border="70"> <font color=rgb(255, 128, 170)>
			<img src="advertise.png" align="center" border="70"> <font color=rgb(255, 128, 170)><img src="advertise.png" align="center" border="70"> <font color=rgb(255, 128, 170)></font></marquee>
	
	
	<div>

	
	<fieldset background-color:"red" class="rest">
	<h3 ><font color="black" font="impact"><i>Popular in Bangalore<i></font></h3>
	
	<!-- <table border="2" cellspacing="0" >
		<tr >
			<td ><a href="menu.html"><img src="restaurants\karavali.jfif" class="tab"></a></td>
			<td><a href="menu.html"><img src="restaurants\gatewayhotel.jfif"></a></input> <pre>gatewayhotel</pre></td>
			<td><a href="menu.html"><img src="restaurants\eatit.jfif"> </a><pre><b><i><center>EATIT!! BAR and RESTAURANT</center></b></i></pre></td>
			<td><a href="menu.html"><img  src="restaurants\hardrockcafe.jfif"></a></input> <pre>hardrockcafe</pre></td>
		</tr>
	</table> -->

	<form action="menu.php" method="post">
	<div class="row">
			<div class="column">
				<label>	<a ><img  id="img"  src="restaurants\karavali.jfif"  style="width:270px">
						<div >
							<button type="submit" id="btn" value="karavali" name="hotel1">KARAVALI</button> 
						</div></label>
			</div>
			<div class="column">
				<label>	<a ><img  id="img"  src="restaurants\gatewayhotel.jfif"  style="width:270px">
						<div >
							<button type="submit" id="btn" value="Gateway Hotel" name="hotel1">Gateway Hotel</button> 
						</div></label>
			</div>
			<div class="column">
				<label>	<a ><img    src="restaurants\shakenandstirred.jfif"  style="width:270px">
						<div >
							<button type="submit" id="btn" value="shaken and stirred" name="hotel1">shaken and stirred</button> </label>
						</div>
			</div>
			
			<div class="column">
				<label>	<a ><img  id="img"  src="restaurants\itcgardenia.jfif"  style="width:270px">
						<div >
							<button type="submit" id="btn" value="itcgardenia" name="hotel1">itc gardenia</button> </label>
						</div>
			</div>
			
			<div class="column">
				<label>	<a name="hotel"><img  id="img1"  src="restaurants\shangri-la.jfif"  style="width:270px">
						<div >
							<button type="submit" id="btn" value="shangri-la" name="hotel1">shangri-la</button> </label>
						</div>
			</div>
			
			<div class="column">
				<label>	<a name="hotel"><img  id="img2"  src="restaurants\hardrockcafe.jfif"  style="width:270px">
						<div >
							<button type="submit" id="btn" value="hardrock cafe" name="hotel1">hardrockcafe</button> </label>
						</div>
			</div>
			
			
				
			
		  </div>
		  </fieldset>
	</fieldset>
	

</div>

</body>

</html>
