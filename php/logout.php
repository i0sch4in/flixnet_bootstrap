<?php
session_start();
include "../php/DbConfig.php";
$eposta = $_SESSION['eposta'];
unset($_SESSION['eposta']);
session_destroy();
if(!isset($_SESSION['eposta'])){
  header('Location: ../php/showFilms.php');
}
?>
