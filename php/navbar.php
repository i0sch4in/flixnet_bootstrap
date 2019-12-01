<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>
    <link rel="icon" href="../img/netflix-icon.svg">
    <title>FlixNet</title>
    <?php include "../php/DbConfig.php"?>
  </head>
  <div class="jumbotron bg-dark">
    <div class="img-container">
      <img class="img-responsive" src="../img/netflix-seeklogo.svg" alt="netflix-title" height="200">
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../php/register.php">Erregistratu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../php/login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../php/logout.php">Logout</a>
          </li>
          <li class="nav-item dropdown ml-auto">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-expanded="false"> Ongi etorri, anonymous </a>
            <div id="dropdownOptions" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a href="../php/login.php" class="dropdown-item">Sesioa hasi</a>
            </div>
          </li>
        </ul>
    </nav>
  </div>
