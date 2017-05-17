<?php
	if (isset($_POST['submit'])) {
		$user = $_POST['name'];
		$email  = $_POST['email'];
		$pass = $_POST['pass'];
		$con = mysqli_connect("sql12.freemysqlhosting.net","sql12174947","RwdgM1aB2Q","sql12174947");
		$sql = "INSERT INTO User values ('$email','$user','$pass')";
		if(mysqli_query($con,$sql)){
			echo "Successful";

		}else{
			echo "Fail".mysqli_error($con);

		}
	} 
	
?>