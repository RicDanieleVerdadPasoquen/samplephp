<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM birthdays");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta Name="viewport" content="width=device-width, initial-scale=1.0">
    <link id="theme-style" rel="stylesheet" href="css/Style.css">
	<title>Homepage</title>
</head>
<body style="background-image: url('image/indexfbdbg.jpeg'); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="container mx-auto rounded pl-5 pr-5 pt-5 pb-5 ml-5 mr-5 mb-5 mt-5" style="background-color: pink;"><br>
<h1><?php echo "FAMOUS BIRTHDAY LIST"; ?></h1>
	<h3><a href="add.html">Add new Data</a></h3><br/><br/>

    <table>
		<tr>
			<td class="pl-2">ID </td>
			<td class="pl-2">Name </td>
			<td class="pl-4">Birthday </td>
			<td class="pl-5">Created</td>
			<td class="pl-5">Update</td>
		</tr> 
</div>
        <?php
while( $res = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$res['Name']."</td>";
    echo "<td>".$res['birthday']."</td>";
    echo "<td>".$res['created_at']."</td>";
    echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a> | <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
    echo "</tr>";
} 

?>
	</table><br><br>

    <nav class="btn btn-success blog-nav nav nav-justified my-5">
		<a class="text-white nav-link-prev nav-item nav-link rounded" href="index.php"><strong>EXIT</strong><i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
	</nav>
	
</body>
</html>