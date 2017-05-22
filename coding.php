<?php
	if (isset($_GET['submit'])) {
		echo "ok";
		$user = $_GET['name'];
		$email  = $_GET['email'];
		$pass = $_GET['pass'];
		$con = mysqli_connect("localhost","root","123","lovecal");
		$sql = "INSERT INTO Users (User_email,UserName,Pass) values ('$email','$user','$pass')";
		if(mysqli_query($con,$sql)){
			echo "Successful";

		}else{
			echo "Fail".mysqli_error($con);

		}
		$sql = "SELECT * from users where email='$email'";
		$res = mysqli_query($con,$sql);
		$linkid = "abc";
		while($row=mysqli_fetch_array($res)){
			$linkid = $row['LinkID'];
		}
		header('Location: prank.php?urlname= linkid=http://lovecal.com/index.php?linkid='.$linkid);
	} 
	
?>