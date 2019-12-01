<?php
include "../php/navbar.php";
unset($_SESSION['eposta']);
session_destroy();
if(!isset($_SESSION['eposta'])){
  echo "<div class='container'> <p> Sesioa zuzen amaitu duzu. </p> </div>";
}
 ?>
