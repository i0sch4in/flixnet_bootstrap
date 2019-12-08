<?php
include "../php/navbar.php"
?>
<div class="container">
  <?php
  $xml = simplexml_load_file('../xml/filmak.xml');
  # Ezin dira urte eta izenburu bereko bi film egon
  foreach($xml -> filma as $filma){
    if(($filma->izenburua == $_POST['izenburua']) && ($filma->urtea == $_POST['urtea'])){
      echo "<p class='text-danger'><span class='font-weight-bold'>ERROREA:</span> katalogoan honezkero badago ". $_POST['izenburua']." (".$_POST['urtea'].")! </p>";
      echo "<p> Beste film bat sartu nahi baduzu egin klik <a href='../php/addFilm.php'>hemen</a> </p>";
      exit();
    }
  }

  $filma = $xml -> addChild('filma');
  $filma -> addChild('egilea', $_POST['eposta']);
  $filma -> addChild('izenburua', $_POST['izenburua']);
  $filma -> addChild('urtea', $_POST['urtea']);
  $filma -> addChild('zuzendaria', $_POST['zuzendaria']);
  $filma -> addChild('generoa', $_POST['generoa']);
  $filma -> addChild('iraupena', $_POST['iraupena']);
  $filma -> addChild('sinopsia', $_POST['sinopsia']);
  $filma -> addChild('balorazioa', $_POST['balorazioa']);
  $filma -> addChild('esteka', $_POST['esteka']);

  $xml -> asXML('../xml/filmak.xml');
  echo "<p>". $_POST['izenburua']." (".$_POST['urtea'].") katalogora gehitu da. Katalogo osoa ikusi nahi baduzu egin klik <a href='../php/showFilms.php'>hemen</a> </p>";
  ?>
</div>
<?php
include "../php/footer.php";
?>
