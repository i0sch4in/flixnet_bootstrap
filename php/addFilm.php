<?php include "../php/navbar.php" ?>
    <div class="container align-items-center">
      <form id="filmForm" action="../php/addFilmToXML.php" method="POST">
        <div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">egilearen e-posta</span>
            </div>
            <input type="text" name="eposta" id="eposta" class="form-control" value="<?php echo $_SESSION['eposta'] ?>" readonly>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Izenburua</span>
              </div>
              <input type="text" name="izenburua" id="izenburua" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Urtea</span>
              </div>
              <input type="text" name="urtea" id="urtea" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Zuzendaria</span>
              </div>
              <input type="text" name="zuzendaria" id="zuzendaria" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Generoa</span>
              </div>
              <input type="text" name="generoa" id="generoa" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Iraupena (min)</span>
              </div>
              <input type="text" name="iraupena" id="iraupena" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Sinopsia</span>
              </div>
              <textarea name="sinopsia" id="sinopsia" class="form-control" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Balorazioa (0..100)</span>
              </div>
              <input type="number" name="balorazioa" id="balorazioa" class="form-control" min="0" max="100" value="1">
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
          <button id="bidali" class="btn btn-danger" disabled>Bidali</button>
      </form>
      <div id="mezua">
      </div>
    </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#urtea").change(function(){
            var yearRegex = new RegExp("^((20)|1(8|9))[0-9]{2}");
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
            if(($("#mezua").html() == "") && !anyFieldEmpty()){
              $("#bidali").prop("disabled", false);
            }
            else{
                $("#bidali").prop("disabled", true);
            }
          });
        });
        //returns true if any input field is empty
        function anyFieldEmpty(){
          var empty = false;
          $(":input[type=text], :input[type=number], textarea").each(function() {
              if($.trim($(this).val()) === ''){
                empty = true;
                return false;
              }
          });
          return empty;
        }
      </script>
<?php include "../php/footer.php" ?>
