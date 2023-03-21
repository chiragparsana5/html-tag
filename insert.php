<?php
	include "conform.php";
	if(isset($_REQUEST['submit']))
	{
		$fname=$_REQUEST['fname'];
		$lname=$_REQUEST['lname'];
		$addr=$_REQUEST['addr'];
		$contry=$_REQUEST['contry'];
		$gnd=$_REQUEST['gnd'];
		$insert="INSERT INTO `geet`(`fname`, `lname`, `addr`, `contry`, `gnd`)values('$fname', '$lname', '$addr', '$contry', '$gnd')";
		$result= mysqli_query($con,$insert);
	//	echo $insert;
		header("location:form.php");
	}
	
?>