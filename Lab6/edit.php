<?php 
include("connection.php"); 
$imie = $_POST['imie1']; 
$email = $_POST['email1']; 
$sql="UPDATE 'test' SET email='$email' WHERE imie='$imie'"
if( @mysqli_query($conn,$sql)){ 
     
    echo "Rekord został dodany poprawnie";} 
   else {echo "Błąd nie udało się dodać nowego rekordu ".mysqli_error($conn);} 
    
   mysqli_close($conn); 
} 
?>

