<?php
    $citta=['milano','firenze','roma'];    
    echo '<br>Città <br>';
    for ($i=0; $i<count($citta); $i++) { 
        echo '- '.$citta[$i] . '<br>';
    }

//todo array associativo
    $persona=[
        'nome'=>'Luca',
        'cognome'=>'rossi',
        'eta'=>25,
    ];echo '<br>Persona <br>';
    foreach($persona as $chiave=>$valore){
        echo $chiave.' => '.$valore."<br>";
    }

//todo array bidimenzionale
    $scuola=[
        ['Luca','Marco','Anna'],
        ['Leonardo','Mattia','Paola'],
    ];echo '<br>Scuola <br>';
    for ($classe=0; $classe < count($scuola); $classe++) { 
        echo '<br>'.'Classe '. $classe . '<br>';
        for ($alunno=0; $alunno < count($scuola[$classe]); $alunno++) { 
            echo '- '. $scuola[$classe][$alunno].'<br>';
        }
    }

//todo ordinamento
    echo '<br><br>Ordinamento <br>';
    sort($citta); echo '<br> Sort: ';print_r($citta);
    rsort($citta); echo '<br> Rsort: ';print_r($citta);


    ksort($persona);echo '<br> Ksort: ';print_r($persona);
    krsort($persona);echo '<br> Krsort: ';print_r($persona);

    asort($persona);echo '<br> Asort: ';print_r($persona);
    arsort($persona);echo '<br> Arsort: ';print_r($persona);
//todo modifiche
    echo '<br><br>Modifiche <br>';
    array_push($citta, "Palermo");echo '<br> Shift: ';print_r($citta);
    array_pop($citta);echo '<br> Pop: ';print_r($citta);
    array_unshift($citta, "Catania");echo '<br> Shift: ';print_r($citta);
    array_shift($citta);echo '<br> Pop: ';print_r($citta);

?>
<style>
    *{background:black;color:white;}
</style> 