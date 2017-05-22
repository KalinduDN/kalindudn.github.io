<?php
	if (isset($_GET['submit'])) {
		$con = mysqli_connect("localhost","root","123","lovecal");
		$id = $_GET['urlname'];
		$sql = "SELECT * from users where LinkID='$id'";
		$res = mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($res)){
			$email = $row['User_email'];

			$fn = $_GET['firstName'];
			$sn = $_GET['secondName'];
			mail('$email','Your Friend has Been Pranked','You just prank your friend using Love Calculator\n\nThese Names has been entered by your friend\n\n'.$fn.'\t\t'.$sn);
			$sql1 = "INSERT into prank(First_name,Second_name,Users_User_email) values ('$fn','$sn','$email')";
			if(mysqli_query($con,$sql1)){
				echo "DONE";

			}else{
				echo "Fail";

			}

		}
	}
	
?>
<?php 

function abc(){
	$con = mysqli_connect("localhost","root","123","lovecal");
	$id = $_GET['urlname'];
		$sql = "SELECT * from users where LinkID='$id'";
		$res = mysqli_query($con,$sql);
		$username = "";
		while($row=mysqli_fetch_array($res)){
			$username = $row['UserName'];
			

		}
		return $username;
	



}
	
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>You Have Been Prank</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	var url = document.URL;
	var idno = url.split("?linkid=");
	$("#linkidtext").val(url);
});

</script>
	<style type="text/css">
		h1{
			color: pink;
			font-size:50px;
			text-align: center;
		}
		#h1{
			color: pink;
			font-size:40px;
			text-align: center;
		}
		.text{
			text-align: center;	
			color: red;
			width: 300px;
			height: 40px;
			font-size:20px;
			background-color: pink;
			margin-left:50px;

		}
		.text1{
			text-align: center;
			
			color: red;
			width: 300px;
			height: 40px;c
			font-size:20px;
			background-color: #000;
			background: transparent;
			margin-left:50px;
			border: none;

		}
		#tab{
			border-spacing: 0px;


		}
		#col{
			
			height: 50px;
		}
		h2{
			color: pink;
			text-align: left;

		}
	</style>
</head>
<body background="background.png">
<center>

<table>
	<tr>
		<td rowspan="2"><img src="fooled.png"></td>
		<td><h1>
	You have been prank by your friend<i><p id="name"><?php echo abc() ?></p></i>

</h1></td>

	</tr>
	<tr>
	<td>
	<p id="h1">
		Both your name have been sent to your friend!!!

	</p>
	

	</td></tr>
</table>
<form method="get" action="coding.php">
<table id="tab">
	<tr>
		<td colspan="2" id="col">
		
			<h2 style="font-size:40px">Start Pranking Your Friends</h2>
		
		</td>
	</tr>
	<tr>
		<td id="col">
		<h2>
			Your Email :			
		</h2>
		</td id="col">
		<td>
			<input type="text" name="email" class="text" id="first">
		</td>

	</tr>
	<tr>
		<td id="col">
		<h2>
			Your Name :			
		</h2>
			
		</td id="col">
		<td>
			<input type="text" name="name" class="text" id="second">
		</td>

	</tr>
	<tr>
		<td>
		<h2>
			Your Password :			
		</h2>
			
		</td>
		<td>
			<input type="text" name="pass" class="text">
		</td>

	</tr>
	<tr>
		<td>
		<h2>
					
		</h2>
			
		</td>
		<td>
			<input type="submit" name="submit" class="text1" value="Generate Link">
		</td>

	</tr>

</table>
</form>
<br>
<br>
<br>
<table>
	<tr>
		<td>
			<h2>
				Share this link to prank your friends: 
			</h2>
		</td>
		<td>
			<input type="text" name="linkidtext" class="text" id="linkidtext" style="width: 800px;">
		</td>
	</tr>

</table>
</center>


</body>
</html>
