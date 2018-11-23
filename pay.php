<html>
<head>
	<link rel="stylesheet" type=text/css href="payphp.css">
</head>
<body  background="login1.jpg">
	<a href="mainpage.php" ><input type="button" id="button" value="HOME"></a>
	<a href="feedback.html" ><input align='right' type="button" class="feedback"  value="FEEDBACK"></a>
	<center>
		<img >
		<p>
		
	
	</center>
	
	<center id="center">
		
		<div id="confirmation">
		<h3 id="waiting">WAITING FOR CONFIRMATION</h3>
			
		</div>
		<p style="color:red"><b>* please do not press back or refresh button</b></p>
	</center>
  <script>
		
		childapp();
		setTimeout(childapp,4001);
		//setTimeout(childapp,12002);
		center=document.getElementById("center");
		setTimeout(function(){center.remove(div)},8002);
			setTimeout(image,8006);
			function image()
			{
				var img=document.createElement('img');
				center.appendChild(img);
				var pp=document.querySelector('img');
				pp.setAttribute('src','thankyou1.jpg');
				
				
				para=document.createElement('p');
				center.appendChild(para);
				 pp=document.querySelector('p');
				
				
					setInterval(redirection,1000);
					
				i=12;
				function redirection()
				{	
					 para1=document.createElement('p');
					center.appendChild(para1);
					center.replaceChild(para1,center.childNodes[0]);
					//center.appendChild(para);
					 pp1=document.querySelector('p');
					 new1=pp1.textContent="REDIRECTING TO HOME PAGE IN " + i +" SECONDS" ;
					 pp1.setAttribute("style","color:red font-size=20px");
					if(i==0)
						location.href="mainpagelogin.php";
					i--;
				}
				
			
			}
		function childapp()
		{
				 dot=document.createElement('h1');
				 div=document.getElementById("confirmation");
				div.appendChild(dot);
				setTimeout(insertdot,1000);
				setTimeout(insertdot,2000);
				setTimeout(insertdot,3000);
				var dott=document.querySelector('h1');
				setTimeout(function(){div.removeChild(dott)},4000);
		}		
		
		function insertdot()
		{
			var x=document.querySelector('h1');
			x.setAttribute("style",'color:yellow');
			var dot2=document.createTextNode(" .");
			x.appendChild(dot2);
		
		}
		
		
		
		
		
  </script>

</body>
</html>
<?php
	
	


?>
