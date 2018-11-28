<?php 
include("connection.php"); 

$sql="SELECT user.nick, test.imie
FROM user
INNER JOIN test ON user.imiee = test.imie"
$result = $conn->query($sql);
$row = $result->fetch_assoc();
   
$conn->close();
?>
