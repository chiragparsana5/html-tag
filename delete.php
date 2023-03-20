<?php
	require "conform.php";
	$id=$_REQUEST['id'];
	$delete="DELETE FROM `geet` WHERE `id`=$id";
	$result= mysqli_query($con,$delete);
	if($result)
	{	
		header("location:select.php");
	}
	else
	{
		echo "RECORD NOT deleted";
	}
?>