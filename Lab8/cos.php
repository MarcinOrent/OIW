<?php
    include("connection.php");
    $user = "root";
    $wiadomosc = $_POST['wiadomosc'];
    $sql = "insert into komunikator(id_w, user,wiadomosc,data_nadania) values(null, '$user','$wiadomosc',null)";


    if (mysqli_query($conn, $sql)) 
    {
        echo '<div class="alert alert-success">artykuł został dodany</div>';

        $sql = 'select * from komunikator';
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc()) {
                echo $row["user"]." pisze:<br>".$row["wiadomosc"]."<br>"."dnia:".$row["data_nadania"]."<hr>";
            }
        } 
    } else 
    {
      echo '<div class="alert alert-danger">bład dodawania artykułu: ' . mysqli_error($conn)."</div>";
    }
  
    mysqli_close($conn);
?>