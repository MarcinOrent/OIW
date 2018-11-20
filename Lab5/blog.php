
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DragonBall</title>
       
  <link rel="stylesheet" href="style/css/bootstrap.css" />
  <link rel="stylesheet" href="style/css/bootstrap-theme.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="scripts/js/bootstrap.js"></script>
  <meta charset="utf-8">
  <title>Dragon ball</title> 
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type ="text/javascript" src = "scripts/text.js"></script>  
  <script src = "scripts/odswiez.js"></script>
  <script >

$(document).ready(function(){
   var $form = $('form');
   $form.submit(function(){
      $.post($(this).attr('action'), $(this).serialize(), function(response){
            // do something here on success
      },'json');
      return false;
   });
});


  function showMe (ele)
  {
  var xhttp = new XMLHttpRequest();
  $wiadomosc = $('#Tt').val();
  var url = "cos.php";
  var params = 'wiadomosc=' + $wiadomosc;
  //typ http , zasob , czy asynchronicznie 
  xhttp.open("POST", url, true);

  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
       // Typical action to be performed when the document is ready:
       document.getElementById("komunikator").innerHTML = xhttp.responseText;
    }
};
//dane do przeslania
xhttp.send(params);
}
  </script>
  </head>
  <body >

    <img src="../dbs.png" alt="My test image">
    <h1>Blog poświęcony postaciom z mangi oraz anime pod tytułem "DragonBall" </h1>
    <h2>Postacie</h2>
    <ul> 
            <li>GOKU</li>
            Goku (孫そん悟ご空くう Son Gokū), born Kakarot (カカロット Kakarotto, lit. "Cacarrot"), is a male Saiyan and the main protagonist of the Dragon Ball series. Goku is a Saiyan originally sent to Earth as an infant with the mission to destroy its people. However, an accident alters his memory, allowing him to grow up to become Earth's greatest defender and the informal leader of the Dragon Team. He constantly strives and trains to be the greatest warrior possible, which has kept the Earth and the universe safe from destruction many times
            <a href="http://dragonball.wikia.com/wiki/Goku">Czytaj dalej</a>
            <hr/>
            <li>VEGETA</li>
            Vegeta (jap. ベジータ [Bejīta], pl. w anime Wegeta, pl. w mandze Vegeta, fr. Végéta, ang. Vegeta) – jedna z głównych postaci serii. Saiyanin, książę planety Vegeta; mąż Bulmy[3], ojciec Trunksa i Bry. Na Ziemię przybył z Nappą w celu podbicia jej i zdobycia nieśmiertelności za sprawą tamtejszych smoczych kul.

Jego plan nie powiódł się. Ziemianom, na czele z wychowanym na Ziemi Saiyaninem Son Gokū udało się go powstrzymać. Przez względnie długi okres Vegeta należał do grona „czarnych charakterów” serii, jednak wraz z upływem czasu przeszedł na stronę Wojowników Z (pozostając dalej wiernym saiyańskim ambicjom) i pomagał innym bohaterom sagi, tłumacząc to tak, iż duma Saiyanina nie pozwala mu stać obojętnie[potrzebne źródło], a wręcz nakazywała walczyć, i potęgować swoją siłę. Potrafił poświęcić życie, by obronić Ziemię i jej mieszkańców. Książę Saiyan ożenił się z Ziemianką Bulmą i miał z nią dwójkę dzieci, Trunksa i Brę. Był jednym z najlepszych przyjaciół i najgorszych wrogów Gokū. Zawsze z nim rywalizował.
            <a href="http://pl.dragonball.wikia.com/wiki/Vegeta">Czytaj dalej</a>
            <hr/>
            <li>GOHAN</li>
            Son Gohan (jap. 孫悟飯 [Son Gohan], pl. w anime Songokan, pl. w mandze Son Gohan, fr. Son Gohan) – Półsaiyanin, Półziemianin, pierwszy syn Son Gokū i Chichi, starszy brat Son Gotena, mąż Videl, ojciec Pan i pierwszy uczeń Piccolo. Jego najlepszym przyjacielem jest Piccolo, zaprzyjaźnił się z nim kiedy trenował, aby powstrzymać Nappę i Vegetę, którzy chcieli podbić Ziemię.
            <a href="http://pl.dragonball.wikia.com/wiki/Son_Gohan">Czytaj dalej</a>
          </ul>
         
          
          
          <div id ="main">
		
			
					<?php
         include("connection.php");
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
				<h3> Subskrypcja </h3>
			</div>
			

<form action="dwa.php" method="post"> 
  <label for = "imie">imię:</label> 
  <input type="text" name="imie" /><br /> 
  <label for = "email">email:</label>
  <input type="text" name="email" /><br /> 
  <input type="submit" value="dodaj" /> 
 
</form>
<center>
<form action="deleteb.php" method="post">
<label for = "imie">uzytkownik do usunięcia:</label>
<input type="text" name="imie2" /><br /> 
<input type="submit" value="USUN" /> 
</center>
<?php
         include("connection.php");
          $sql="select * from test ";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo  "<center>"."<h1>" . $row["imie"]."</h1>"."</center>";
              }
          } else {
              echo "0 results";
          }
          $conn->close();
          
          ?>
</form>

<hr>
 <div id="komunikator">
  <?php
  include("showMe.php");
  ?>
</div>
</form>

    

		

<label for = "wiadomosc"><h1>Chat</h1></label>
<textarea name="wiadomosc" id="Tt" rows ="10" cols="70" ></textarea>
  <input type="submit" value="wyslij"onclick="showMe(this)">
</body>
  <link rel="Stylesheet" href="stylee.css"/>
</html>