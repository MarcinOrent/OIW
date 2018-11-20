<?php
    include("connection.php");
    $sql = 'select * from komunikator';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["user"]." pisze:<br>".$row["wiadomosc"]."<br>"."dnia:".$row["data_nadania"]."<hr>";
        }
    } else {
        echo '<div class="alert alert-danger">0 results</div>';
    }
    $conn->close();
    
?>