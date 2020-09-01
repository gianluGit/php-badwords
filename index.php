<!-- Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
  $par = 'In un pozzo poco cupo si specchiò una volta un lupo, che nel cupo pozzo andò a sbattere di cozzo con un cupo tonfo fioco da smaltire a poco a poco e credette di azzanare un feroce suo compare, ma rimase brutto e cupo il feroce lupo.';

  echo $par;
  echo "<br>";
  // var_dump($par);
  echo "Lunghezza stringa: ";

  echo strlen($par);
  echo '<br>';

  $parGet = $_GET["badword"];

  echo str_replace($parGet, '***', $par);


?>
