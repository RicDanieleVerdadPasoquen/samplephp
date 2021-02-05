<?php 

	include_once("config.php");

if( isset($_POST['update']))
{
			$id = mysqli_real_escape_string($mysqli, $_POST['id']);
			$Name = mysqli_real_escape_string($mysqli, $_POST['Name']);
			$birthday = mysqli_real_escape_string($mysqli, $_POST['birthday']);

			if( empty($Name) || empty($birthday) ){

				if(empty($Name)){
					echo "<font color='red'> Name field is empty. </font><br/>";
				}

				if(empty($birthday)){
					echo "<font color='red'> birthday field is empty. </font><br/>";
				}
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

			} else {

				$result = mysqli_query($mysqli, "UPDATE birthdays set Name='$Name', birthday='$birthday' WHERE id=$id");
				header("Location: indexfbd.php");
				
			}

}
?>

<?php 

	$id = $_GET['id'];

	$result = mysqli_query($mysqli,"SELECT * from birthdays where id=$id");

	while($res = mysqli_fetch_array($result))
	{
		$Name = $res['Name'];
		$birthday = $res['birthday'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="wIDth=device-wIDth, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/edit.css">
	<title>Edit data</title>
</head>
<body style="background-image: url('image/indexfbdbg.jpeg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: magenta;"><br>
	<form name="form1" method="post" action="edit.php">

    <table wIDht="25%">
			<tr>
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo $Name;?>"></td>
			</tr>
			<tr>
				<td>Birthday</td>
				<td><input type="date" name="birthday" value="<?php echo $birthday;?>" ></td>
			</tr>
			<tr>
				<td>
					<input type="hIDden" name="id" value="<?php echo $_GET['id'];?>">
				</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>		
		
<br>
	</form>

</div>

	
</body>
</html>