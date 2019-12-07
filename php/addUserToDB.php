<?php
  include "../php/navbar.php";
  $konexioa = @mysqli_connect($zerbitzaria, $erabiltzailea, $gakoa, $db) or die ("<php class='text-danger>Errorea: ezin izan da konexioa ezarri</p>");
  $query = "SELECT * FROM Users WHERE eposta = '". $_POST["eposta"] ."';";
  $emaitza= @ mysqli_query($konexioa,$query);
  if(!$emaitza){
    die("<p class='text-danger'>Errorea kontsulta egiterakoan</p>");
  }
  else {
    if(mysqli_num_rows($emaitza) != 0){
      die("<p class='text-danger'>Erabiltzaile hori jada erregistratuta dago. Berriro saiatzeko, egin klik <a href='../php/register.php'>hemen</a></p>");
    }
    else {
      $sql = "INSERT INTO Users VALUES ('$_POST[eposta]' , '$_POST[nick]', '$_POST[pwd1]', '$_POST[data]')";
      $emaitza = mysqli_query($konexioa,$sql);
      if(!$emaitza){
        die("<div class='container'><p class='text-danger'>Errorea erabiltzailea datu-basean sartzean.</p></div>");
      }
      else {
        echo "<div class='container'><p>Zuzen erregistratu zara, sesioa hasteko egin klik <a href='../php/login.php'>hemen</a>.</p></div>";
      }
    }
  }
 ?>
