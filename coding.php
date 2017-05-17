<?php
	if (isset($_GET['submit'])) {
		echo "ok";
		$user = $_GET['name'];
		$email  = $_GET['email'];
		$pass = $_GET['pass'];
		$con = mysqli_connect("sql12.freemysqlhosting.net","sql12174947","RwdgM1aB2Q","sql12174947");
		$sql = "INSERT INTO User values ('$email','$user','$pass')";
		if(mysqli_query($con,$sql)){
			echo "Successful";

		}else{
			echo "Fail".mysqli_error($con);

		}
	} 
	
?>