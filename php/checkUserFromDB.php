<?php
include "../php/DBConfig.php";
$konexioa = @mysqli_connect($zerbitzaria, $erabiltzailea, $gakoa, $db) or die ("Errorea: ezin izan da konexioa ezarri");
$sql = "SELECT * FROM USERS WHERE EPOSTA=$_POST['eposta'] AND PASAHITZA=$_POST['pasahitza']";
$ema=@mysqli_query($konexioa,$sql);
if(!$ema || (mysqli_num_rows($ema) != 1)){
  die('Erabiltzailea eta pasahitza ez datoz bat')
}
else{
	$_SESSION['eposta'] = $_POST['eposta'];
}
?>
