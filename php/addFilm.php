<?php include "../php/navbar.php" ?>
    <div class="container align-items-center">
      <form id="registerForm" action="../php/addFilmToDB.php" method="POST">
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">egilearen e-posta</span>
            </div>
            <input type="text" name="eposta" id="eposta" class="form-control" value="<?php echo $_SESSION['eposta'] ?>" disabled>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Izenburua</span>
              </div>
              <input type="text" name="izenburua" id="izenburua" class="form-control" placeholder="Titanic">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Urtea</span>
              </div>
              <input type="text" name="urtea" id="urtea" class="form-control" placeholder="1997">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Zuzendaria</span>
              </div>
              <input type="text" name="zuzendaria" id="zuzendaria" class="form-control" placeholder="James Cameron">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Generoa</span>
              </div>
              <input type="text" name="generoa" id="generoa" class="form-control" placeholder="Drama">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Iraupena (min)</span>
              </div>
              <input type="text" name="iraupena" id="iraupena" class="form-control" placeholder="195">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Sinopsia</span>
              </div>
              <textarea name="sinopsia" id="sinopsia" class="form-control" placeholder='A 100-year-old woman named Rose DeWitt Bukater tells a story about her voyage on the famous ship Titanic. She is sharing the story with her granddaughter, Lizzy Calvert, and a crew of men who are interested in the Titanic shipwreck.'></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Trailerraren esteka</span>
              </div>
              <input type="text" name="esteka" id="esteka" class="form-control" placeholder="https://www.youtube.com/embed/FiRVcExwBVA">
            </div>
          </div>
          <button type="sumbit" id="bidali" class="btn btn-danger" disabled>Bidali</button>
      </form>
      <div id="mezua">
      </div>
    </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#urtea").change(function(){
            var yearRegex = new RegExp("1(8|9)[0-9]{2}");
            if(!yearRegex.test($("#urtea").val())){
              $("#mezua").html("<p class='text-danger'>Urtea ez da zuzena.</p>");
            }
            else{
              $("#mezua").html("");
            }
          });
          $("#esteka").change(function(){
            var linkRegex = new RegExp('https://www.youtube.com/embed/.{4,}');
            if(!linkRegex.test($("#esteka").val())){
              $("#mezua").html("<p class='text-danger'>Estekak ez dauka formatu egokia. Ziurtatu embed motakoa sartzen ari zarela</p>");
            }
            else{
              $("#mezua").html("");
            }
          });
          $(".form-control").change(function(){
            if($("#mezua").html() == ""){
              $("#bidali").prop("disabled", false);
            }
            else{
              $("#bidali").prop("disabled", true);
            }
          });
        });
      </script>
  </body>
</html>
