<?php include "../php/navbar.php" ?>
    <div class="container align-items-center">
      <form action="../php/checkUserFromDB.php" method="POST">
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
        <button type="submit" id="bidali" class="btn btn-danger">Bidali</button>
      </form>
      <div id="mezua">

      </div>
    </div>
  </body>
</html>
