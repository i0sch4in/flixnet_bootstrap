<?php
$xml = simplexml_load_file('../xml/filmak.xml');
# Ezin dira urte eta izenburu bereko bi film egon
foreach($xml -> children() as $filma){
  if($filma['izenburua'] == $_POST['izenburua'] && $filma['urtea'] == $_POST['urtea']){
    $exists = true
  }
}
if($exists){
  die('filmExists');
}
else{
  $filma = $xml -> addChild('filma');
  $filma -> addChild('egilea', $_POST['egilea']);
  $filma -> addChild('izenburua', $_POST['izenburua']);
  $filma -> addChild('urtea', $_POST['urtea']);
  $filma -> addChild('zuzendaria', $_POST['zuzendaria']);
  $filma -> addChild('generoa', $_POST['generoa']);
  $filma -> addChild('iraupena', $_POST['iraupena']);
  $filma -> addChild('sinopsia', $_POST['sinopsia']);
  $filma -> addChild('balorazioa', $_POST['balorazioa']);
  $filma -> addChild('esteka', $_POST['esteka']);

  $xml -> asXML('../xml/filmak.xml');
}
?>
