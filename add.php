<?php 
	include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/add.css">
	<title>Add Script</title>
</head>
<body style="background-image: url('image/indexfbdbg.jpeg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: skyblue;"><br>
<?php
if( isset($_POST['Submit'])){
	$Name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$birthday = mysqli_real_escape_string($mysqli, $_POST['birthday']);

	if( empty($Name) || empty($birthday) ){

		if(empty($Name)){
			echo "<font color='red'> Name field is empty. </font><br/>";
		}

		if(empty($birthday)){
			echo "<font color='red'> Birthdate field is empty. </font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a></br></br>";

	} else {

		$result = mysqli_query($mysqli, "INSERT INTO birthdays(Name, birthday) VALUES ('$Name', '$birthday')");
		echo "<font color='green'> Data Added Successfully.";
		echo "<br/><a href='indexfbd.php'> View Result </a>";
	}


}
?>

</div>
	
</body>
</html>