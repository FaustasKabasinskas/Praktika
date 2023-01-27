<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
require_once('mysql_connection.php');
session_start();
if(!isset($_SESSION["id"]) || $_SESSION["id"] == '') 
{
	header('location: index.php');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = $_POST['firstname']; 
	$lastname = $_POST['lastname']; 
	$username = $_POST['username']; 
	$password = $_POST['password']; 
	$usertype = "USER";
	if($firstname != ""  and $lastname != "" and $username != "" and $password != "")
		{
			$query = "INSERT INTO accounts(id,firstname,lastname,username, password, usertype) VALUES (null,'".$firstname."','".$lastname."','".$username."','".$password."','".$usertype."')";
			if(mysqli_query($bd, $query))
			{
				echo "<script>alert('Informacija sėkmingai išsaugota!')</script>";
				echo '<script>windows: location="view_accounts.php"</script>';
			} else {
				echo "<script>alert('Informacija neišsaugota!')</script>";
			}
			
	
}
}
?>
<body>
	<center>
		<?php include('header.html');?>
		<?php include('admin_header.php');?>
		</br>
		<table width="30%">
			<tr>
				<td>
					<form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<center>
					<table style="border: 4px solid #0909da;border-style: inset;border-radius: 10px;background-color: #c9e8ec;">
						<tr>
							<th style="border-bottom: 2px solid;padding: 5px 0px;">Pridėti dėstytoją</th>
						</tr>
						<tr>
							<th width="50%" style="border-bottom: 2px solid;">
								<table width="100%">
									<tr>
										<th style="text-align: left;padding-left: 20px;" width="45%">Vardas: </th>
										<td><input type="text" name="firstname" value="<?php echo '';?>" required></td>
									</tr>
									<tr>
										<th style="text-align: left;padding-left: 20px;">Pavardė: </th>
										<td><input type="text" name="lastname" value="<?php echo '';?>" required></td>
									</tr>
									<tr>
										<th style="text-align: left;padding-left: 20px;">Vartotojo vardas: </th>
										<td><input type="text" name="username" value="<?php echo '';?>" required></td>
									</tr>
									<tr>
										<th style="text-align: left;padding-left: 20px;">Slaptažodis: </th>
										<td><input type="password" name="password" value="<?php echo '';?>" required></td>
									</tr>
								</table>
							</th>
						<tr>
							<th colspan="2" style="padding: 5px 0px;"><input type="submit" name="save" value="Išsaugoti" style="width: 40%;padding: 5px 30px;font-size: 17px;font-weight: bold;border-radius: 3px;border: 2px solid crimson;"></th>
						</tr>
					</table>
					</center>
					</form> 
				</td>
			</tr>
		</table>	
	</center>
</body>
</html>