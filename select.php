select.php
<?php
	require "config.php";
	$sql="SELECT * FROM `geet`";
	$result= mysqli_query($con,$sql);
?>
<html>
	<body>
		<table border="1px" align="center">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Contry</th>
				<th>gender</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
			<?php
				while($data=mysqli_fetch_assoc($result))
				{
					$id=$data['id'];
			?>
			<tr>
				<td><?php echo $data['fname'];?></td>
				<td><?php echo $data['lname'];?></td>
				<td><?php echo $data['addr'];?></td>
		  		<td><?php echo $data['contry'];?></td>
				<td><?php echo $data['gnd'];?></td>
				<td><a href="update.php?id=<?php echo $id;?>">Update</a></td>
				<td><a href="delete.php?id=<?php echo $id;?>">Delete</a></td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>