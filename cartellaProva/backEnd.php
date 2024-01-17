<?php
    $richiesta=$_POST['data']; // Riceve richiesta
    $strJsonFileContent=file_get_contents("$richiesta.json");//prende il contenuto del file
    $array=json_decode($strJsonFileContent,true);//trasforma il contnuto in stringa
    // echo"<pre>".var_export($array['armiAntiche'][0]['nome'],true)."</pre>";// mostra dati

    echo"<p>Risultato</p>". json_encode($array);

?>
