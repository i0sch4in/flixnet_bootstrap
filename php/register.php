<?php include "../php/navbar.php" ?>
    <div class="container align-items-center">
      <form id="registerForm" action="../php/addUserToDB.php" method="POST">
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">e-maila</span>
            </div>
            <input type="text" name="eposta" id="eposta" class="form-control" placeholder="adibidea@gmail.com">
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="text" name="nick" id="nick" class="form-control" placeholder="sartu zure nick-a">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Jaiotze-data</span>
              </div>
              <input type="date" name="data" id="data" class="form-control" value="2001-01-01">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">pasahitza1</span>
              </div>
              <input type="password" name="pwd1" id="pwd1" class="form-control password" placeholder="Sartu pasahitza">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">pasahitza2</span>
              </div>
              <input type="password" name="pwd2" id="pwd2" class="form-control password" placeholder="Errepikatu pasahitza">
            </div>
          </div>
        <button type="sumbit" id="bidali" class="btn btn-danger" disabled>Bidali</button>
      </form>
      <div id="mezua">
      </div>
    </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $(".password").keyup(function(){
            var p1 = $("#pwd1").val();
            var p2 = $("#pwd2").val();
            if(p1 != p2){
              $("#mezua").html("<p class='text-danger'>Pasahitzak desberdinak dira.</p>");
            }
            else if(p2.length < 6){
              $("#mezua").html("<p class='text-danger'>Pasahitza laburregia da.</p>");
            }
            else{
              $("#mezua").html("");
            }
          });
          $("#data").change(function(){
            var data = $("#data").val();
            if(data.split("-")[0] > 2001){
              $("#mezua").html("<p class='text-danger'>18 urtetik gorakoa izan behar duzu erregistratzeko.</p>");
            }
            else if (data == "") {
              $("#mezua").html("<p class='text-danger'>Jaiotze-datak ezin du hutsik egon.</p>");
            }
            else {
              $("#mezua").html("");
            }
          });
          $("#eposta").keyup(function(){
            var emailRegex = new RegExp('[^@]+@[^\\.]+\\..+');
            if(!emailRegex.test($("#eposta").val())){
              $("#mezua").html("<p class='text-danger'>e-posta ez da zuzena.</p>");
            }
            else{
              $("#mezua").html("");
            }
          });
          $("#nick").keyup(function(){
            if($("#nick").val().length < 4){
              $("#mezua").html("<p class='text-danger'>Erabiltzaile-izena ez da zuzena.</p>");
            }
            else{
              $("#mezua").html("");
            }
          });
          $(".form-control").change(function(){ //change, keyup-ekin bestela ez du detektatzen
            //errorerik ez badago eta dena beteta badago, botoia aktibatu
            if(($("#mezua").html() == "") && !anyFieldEmpty()){
              $("#bidali").prop("disabled", false);
            }
            //bestela, botoia desaktibatu
            else{
              $("#bidali").prop("disabled", true);
            }
          });
        });
        //returns true if any input field is empty
        function anyFieldEmpty(){
          var empty = false;
          $(":input[type=text], :input[type=password], :input[type=date]").each(function() {
              if($.trim($(this).val()) === ''){
                empty = true;
                return false;
              }
          });
          return empty;
        }
      </script>
<?php include "../php/footer.php" ?>
