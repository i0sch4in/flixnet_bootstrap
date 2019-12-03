<?php
session_start();
include "../php/DbConfig.php";
$konexioa = @mysqli_connect($zerbitzaria, $erabiltzailea, $gakoa, $db) or die ("Errorea: ezin izan da konexioa ezarri");
$sql = "SELECT * FROM Users WHERE eposta = '". $_POST["eposta"] ."' AND pasahitza = '". $_POST["pwd"] ."';";
$ema=@mysqli_query($konexioa,$sql);
if(!$ema || (mysqli_num_rows($ema) != 1)){
  echo "";
  exit();
}
else{
	$_SESSION['eposta'] = $_POST['eposta'];
  echo $_SESSION['eposta'];
}
?>
