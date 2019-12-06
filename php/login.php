<?php include "../php/navbar.php" ?>
    <div class="container align-items-center">
      <form>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">e-mail</span>
            </div>
            <input type="email" name="eposta" id="eposta" class="form-control">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">pasahitza</span>
            </div>
            <input type="password" name="pwd" id="pwd" class="form-control">
          </div>
        </div>
        <button type="button" id="bidali" class="btn btn-danger">Bidali</button>
      </form>
      <div id="mezua">

      </div>
    </div>
    <script>
      $("#bidali").click(function(){
        $.ajax({
            method: "POST",
            url: "../php/checkUserFromDB.php",
            cache: false,
            data: {eposta: $('#eposta').val(), pwd: $('#pwd').val()},
            success: function(email){
              if(email==""){
                $('#mezua').html("<p class='text-danger'><span class='font-weight-bold'>ERROREA: </span>Erabiltzailea eta pasahitza ez datoz bat.</p>");
              }
              else{
                window.location.replace("../php/successLogin.php?eposta="+email);
              }
            }
        });
      })
    </script>
<?php include "../php/footer.php" ?>
