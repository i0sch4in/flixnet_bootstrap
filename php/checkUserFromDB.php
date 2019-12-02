<?php
include "../php/navbar.php";
$konexioa = @mysqli_connect($zerbitzaria, $erabiltzailea, $gakoa, $db) or die ("Errorea: ezin izan da konexioa ezarri");
$sql = "SELECT * FROM Users WHERE eposta = '". $_POST["eposta"] ."' AND pasahitza = '". $_POST["pwd"] ."';";
$ema=@mysqli_query($konexioa,$sql);
if(!$ema || (mysqli_num_rows($ema) != 1)){
  die('<p class="text-danger">Erabiltzailea eta pasahitza ez datoz bat. berriro saiatzeo egin klik <a href="../php/login.php">hemen</a> </p>');
}
else{
	$_SESSION['eposta'] = $_POST['eposta'];
  echo("<div class='container'> <p>Sesioa hasi duzu. Ongi etorri <span class='text-primary'>". $_SESSION['eposta']."</span>!</p> </div>");
}
?>
