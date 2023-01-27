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
			<th style="text-align: center;width: 85%;">
				<a href="view_records.php" style="text-decoration: none;background-color: #21f794;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset;">Studentų išklotinė</a>
				<a href="create_student_account.php" style="text-decoration: none;background-color: #21f794;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset;">Pridėti studentą</a>
				<a href="choose_grading.php" style="text-decoration: none;background-color: #21f794;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset;">Įrašyti studento pažymius</a>
				<a href="logout.php" style="text-decoration: none;background-color: #21f794;color: #000;padding: 10px 20px;font-weight: bolder;border: 3px solid #d05a5a;border-style: inset;">Atsijungti</a>
			</th>
			<th style="padding: 5px 0px; text-align: center;">
				<span><?php echo "$firstname $lastname";?></span>
			</th>
		</tr>
	</table>
</body>
</html>