<?php 
	$con = mysqli_connect("localhost","root","123","search");
	$sql = "SELECT * from searchtable";
	$resu = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($resu)){
		echo $row['ID'];
		echo $row['Name'];
		echo $row['address'];
		echo "<br/>";
	}

 ?>