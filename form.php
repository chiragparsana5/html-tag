form.php
<html>
	<head>
		<title>from</title>

	</head>
	<body>
		<form action="insert.php" method="post">
			<table align="center" border=2>
			<tr>
				<td>First Name:<input type="text" name="fname" placeholder="Enter your First Name"><br></td>
			</tr>
			<tr>
				<td>Last Name:<input type="text" name="lname" placeholder="Enter Last Name"><br></td>
			</tr>
			<tr>
			 	<td>Address:<textarea name="addr"placeholder="Enter Address Here"></textarea><br></td>
			</tr>
			<tr>
				<td>
					Contry:<input type="text" name="contry" placeholder="Enter Contry">
				</td>
			</tr>
			<tr>
				<td>
					Gender:<input type="radio" name="gnd" value="male">male
					<input type="radio" name="gnd" value="female">female
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>