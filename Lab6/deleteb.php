<?php
	include("connection.php");
	$imie = $_POST['imie2']; 
	
		$sql = "DELETE FROM `test` WHERE `imie`='$imie'";
		if(@mysqli_query($conn,$sql))
		{
		echo	'<div class="alert alert-success">rekod został usuniety</div>';
		}else {
						echo '<div class="alert alert-danger">bład usuwania rekordu: ' . mysqli_error($conn)."</div>";
					}
	mysqli_close($conn);
?>
