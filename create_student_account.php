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
	$teacher_id = $_SESSION["id"];
	$firstname = $_POST['firstname']; 
	$lastname = $_POST['lastname']; 
	$first_grading = 0;
	$second_grading = 0;
	$third_grading = 0;
	$fourth_grading =0;
	$final_grade = 0;
	$remarks = "";
	if($firstname != ""  and $lastname != "")
	{
			$query = "INSERT INTO records(id,teacher_number,firstname,lastname,first_grading,second_grading, third_grading,fourth_grading,final_grade,remarks) VALUES (null,'".$teacher_id."','".$firstname."','".$lastname."','".$first_grading."','".$second_grading."','".$third_grading."','".$fourth_grading."','".$final_grade."','".$remarks."')";
			if(mysqli_query($bd, $query))
			{
				echo "<script>alert('Informacija sėkmingai išsaugota!')</script>";
				echo '<script>windows: location="view_records.php"</script>';
			} else {
				echo "<script>alert('Informacija neišsaugota!')</script>";
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
							<th style="border-bottom: 2px solid;padding: 5px 0px;">Pridėti studentą</th>
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