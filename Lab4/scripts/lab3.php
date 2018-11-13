<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "db";
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          } 
          $conn->set_charset("utf8");
          $sql="select * from postacie2 ";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo  '<h1>' . $row["nazwa"]."</h1>" .$row["opis"]."<hr>";
              }
          } else {
              echo "0 results";
          }
          $conn->close();
          
          ?>



          