<?php
	if(isset($_POST['submit'])){


	}	


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h1{
			font-size:100px;
			color:red;
		}
		#d{
			vertical-align: center;
			
		}
		#text{
			text-align: center;
			
			color: red;
			width: 500px;
			height: 80px;
			font-size:50px;
			background-color: pink;
			
			margin-left:50px;
		}
		#text1{
			text-align: center;
			
			color: red;
			width: 500px;
			height: 160px;
			font-size:100px;
			background-color: #000;
			background: transparent;
			margin-left:50px;
			border: none;
		}
		#sub{
			
			text-align: center;
			color: red;
			width: 430px;
			height: 80px;
			font-size:50px;
			background-color: pink;
			
			margin-left:100px;
		}
		#subv{			
			text-align: center;
			color: red;
			width: 430px;
			height: 80px;
			font-size:50px;
			background-color: pink;			
			margin-right:100px;
		}		
	</style>
</head>
<body background="background.png">
<center>
<form method="post" action="indexcode.php">
	

<table>
	<tr>
	<td colspan="2">
		<div id="d" >
			<h1>LOVE CALCULATOR</h1>
		</div>
	</tr>


	</td>
	
	<tr>
		<td>
			<div align="left" >
			<input type="text" name="firstName"  id="text">
			<br>
			<br>
		</div>

		</td>
		<td rowspan="2">
			<div align="left">
			<label id="text1">100%</label>
			</div>

		</td>
	</tr>
	<tr>
		<td>
			<div align="left">
			<input type="text" name="secondName"  id="text">
			</div>
			<br/>

		</td>
	</tr>
	<tr>
		<td>
			<br/>
			<div align="left">
			<a href="prank.php">
				<input type="submit" name="submit"  id="sub" value="Calculate">				
			</a>
			
			</div>

		</td>

	</tr>
</table>
</form>
</center>

</body>
</html>