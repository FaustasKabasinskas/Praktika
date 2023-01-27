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

$id = $_GET['id'];
$selectquery = "SELECT * FROM records WHERE id = '".$id."'";
$result = mysqli_query($bd, $selectquery);
while($row = mysqli_fetch_array($result)){
	$getfirstname = $row['firstname']; 
	$getlastname = $row['lastname']; 
	$getfirst = $row['first_grading'];
	$getsecond = $row['second_grading']; 
	$getthird = $row['third_grading']; 
	$getfourth = $row['fourth_grading'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$getfirstname = $_POST['firstname']; 
	$getlastname = $_POST['lastname']; 
	$getfirst = $_POST['first']; 
	$getsecond = $_POST['second']; 
	$getthird = $_POST['third']; 
	$getfourth = $_POST['fourth']; 
	
	if($getfirstname != ""  and $getlastname != "")
	{
			$query = "UPDATE records SET firstname='".$getfirstname."',lastname='".$getlastname."',first_grading='".$getfirst."',second_grading='".$getsecond."',third_grading='".$getthird."',fourth_grading='".$getfourth."' where id='".$id."'";
			if(mysqli_query($bd, $query))
			{	
				echo "<script>alert('Informacija sėkmingai pakeista!')</script>";
				echo '<script>windows: location="view_records.php"</script>';
			}else{
				echo "<script>alert('Informacija liko nepakeista!')</script>";
				echo '<script>windows: location="edit_student.php?id='.$id.'"</script>';
			}
			

		}
	
	
}
?>
<body>
	<center>
		<?php include('header.html');?>
		<?php include('teacher_header.php');?>
		</br>
		<table width="30%">
			<tr>
				<td>
					<form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<center>
					<table style="border: 4px solid #0909da;border-style: inset;border-radius: 10px;background-color: #c9e8ec;">
						<tr>
							<th style="border-bottom: 2px solid;padding: 5px 0px;">Atnaujinti informaciją apie studentą</th>
						</tr>
						<tr>
							<th width="50%" style="border-bottom: 2px solid;">
								<table width="100%">
									<tr>
										<th style="text-align: left;padding-left: 20px;" width="45%">Vardas: </th>
										<td><input type="text" name="firstname" value="<?php echo $getfirstname;?>" required></td>
									</tr>
									<tr>
										<th style="text-align: left;padding-left: 20px;">Pavardė: </th>
										<td><input type="text" name="lastname" value="<?php echo $getlastname;?>" required></td>
									</tr>
									<tr>
										<th style="text-align: left;padding-left: 20px;">Pirmas pažymys: </th>
										<td><input type="text" name="first" value="<?php echo $getfirst;?>" required></td>
									</tr>
									<tr>
										<th style="text-align: left;padding-left: 20px;">Antras pažymys: </th>
										<td><input type="text" name="second" value="<?php echo $getsecond;?>" required></td>
									</tr>
									<tr>
										<th style="text-align: left;padding-left: 20px;">Trečias pažymys: </th>
										<td><input type="text" name="third" value="<?php echo $getthird;?>" required></td>
									</tr>
									<tr>
										<th style="text-align: left;padding-left: 20px;">Ketvirtas pažymys: </th>
										<td><input type="text" name="fourth" value="<?php echo $getfourth;?>" required></td>
									</tr>
								</table>
							</th>
						<tr>
							<th colspan="2" style="padding: 5px 0px;"><input type="submit" name="update" value="Atnaujinti" style="width: 40%;padding: 5px 30px;font-size: 17px;font-weight: bold;border-radius: 3px;border: 2px solid crimson;"></th>
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