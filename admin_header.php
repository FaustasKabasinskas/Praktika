<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body>
	
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
</head>
<body>
<?php
$id = $_SESSION['id'];

$selectquery = "SELECT * FROM accounts where id = '".$id."'";
$selectresult = mysqli_query($bd, $selectquery);
while ($row = mysqli_fetch_array($selectresult)){
	$lastname = $row['lastname'];
	$firstname = $row['firstname'];
}
?>
	<table>
		<tr>
			<th style="text-align: right;" width="33.3%">
			</th>
			<th style="text-align: center;"  width="33.4%">
				<a href="view_accounts.php" style="text-decoration: none;background-color: #21f794;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset;">Paskyrų sąrašas</a>
				<a href="create_account.php" style="text-decoration: none;background-color: #21f794;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset;">Sukurti paskyrą</a>
				<a href="logout.php" style="text-decoration: none;background-color: #21f794;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset;">Atsijungti</a>
			</th>
			<th style="padding: 5px 0px;" width="33.3%">
				<span><?php echo "$firstname $lastname";?></span>
			</th>
		</tr>
	</table>
</body>
</html>