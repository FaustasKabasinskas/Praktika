<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
require_once('mysql_connection.php');
session_start();
$type = $_GET['usertype'];

$selectquery = "SELECT * FROM accounts where usertype = '".$type."'";
$selectresult = mysqli_query($bd, $selectquery);
while ($row = mysqli_fetch_array($selectresult)){
}

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "SELECT * FROM accounts where username='".$username."' and password = '".$password."' and usertype = '".$type."'";
	$result	= mysqli_query($bd, $query);
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
		$_SESSION["id"] = $row['id'];
		if($type == "ADMIN"){
			header('location: view_accounts.php');
		} elseif($type == "USER"){
			header('location: view_records.php');
		}
	} 
	else 
	{
		echo "<script>alert('Netinkamas vartotojo vardas ar slaptažodis!')</script>";
	}
}
?>
<body> 
	<center>
		<?php include('header.html');?>
		</br>
		<table width="25%">
			<tr>
				<th style="border: 4px solid #0909da;border-style: inset;border-radius: 10px;background-color: #88edfb;">
					<center>
						<form action="" method="post">
							<table>
								<tr>
									<font style="font-size: 25px;"><strong>Prisijungimas</strong></font>
									</br>
									<font style="font-size: 15px;"><strong>(<?php echo $type;?>)</strong></font>
									</br>
								</tr>
								<?php 
								if($type == "ADMIN"){	
								?>
								<tr>
									<td colspan="2"><center></center></td>
								</tr>
								<?php } ?>
								<tr>
									<th>Vartotojo vardas:</th>
									<td><input type="text" name="username" required></td>
								</tr>
								<tr>
									<th>Slaptažodis:</th>
									<td><input type="password" name="password" required></td>
								</tr>
								<tr>
									<th colspan="2">
										</br>
										<input type="submit" name="login" value="Prisijungti" style="border-radius: 4px;border-color: #ab9090; padding: 5px 15px;font-size: 15px;">
										<button style="border-radius: 4px;border-color: #ab9090; padding: 5px 0px;font-size: 15px;"><a href="index.php" style="text-decoration: none;cursor: default;    padding: 5px 15px; color: black;">Atgal</a></button>
									</th>
								</tr>
							</table>
						</form>
					</center>
					</br>
					</br>
				</th>
			</tr>
		</table>
	</center>
</body>
</html>