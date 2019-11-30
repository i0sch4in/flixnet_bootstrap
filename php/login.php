<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <script>
    $(document).ready(function(){
      $("#bidali").click(function(){
          $.ajax({
              url: "checkUserFromDB.php",
              type: 'POST',
              async: true,
              cache: false,
              data: {eposta : $("#eposta").val(), pasahitza: $("#pwd").val()},
              success: function(){
                $("#mezua").html("Sesioa ondo hasi da");
              },
              error: function(e){
                $("#mezua").html(e);
              }
          });
        });
      });
    </script>
  <body>
    <?php include "../php/navbar.php" ?>
    <div class="container align-items-center">
      <form action="#">
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">e-mail</span>
            </div>
            <input type="email" name="eposta" id="eposta" class="form-control" placeholder="adibidea@gmail.com">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">pasahitza</span>
            </div>
            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="123456">
          </div>
        </div>
        <button type="button" id="bidali" class="btn btn-danger">Bidali</button>
      </form>
      <div id="mezua">

      </div>
    </div>
  </body>
</html>
