<?php 
// odbieramy dane z formularza
include("connection.php"); 
$imie = $_POST['imie']; 
$email = $_POST['email']; 
$haslo = $_POST['haslo'];
if($imie!=null && $email!=null && $haslo!=null) { 
     
    // łączymy się z bazą danych 
   
     $sql ="INSERT INTO test (id,imie, email, haslo) VALUES (null,'$imie', '$email', '$haslo')";
    // dodajemy rekord do bazy 
    if( @mysqli_query($conn,$sql)){ 
     
     echo "Rekord został dodany poprawnie";} 
    else {echo "Błąd nie udało się dodać nowego rekordu ".mysqli_error($conn);} 
     
    mysqli_close($conn); 
} 

?>