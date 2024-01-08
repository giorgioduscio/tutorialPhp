<a href="http://127.0.0.1/tutorial_php/index.php">INDEX</a>
<?php //fix ARRAY
    echo'<h1>Array</h1><div>';
    //todo Città
    $citta=['milano','firenze','roma'];    
    echo '<h2>Città </h2>';
    for ($i=0; $i<count($citta); $i++) { 
        echo '<p>'.$i.') '.$citta[$i] . '</p>';
        if($i==1){break;}
    }
    //todo array associativo e for each
    $persona=[
        'nome'=>'Luca',
        'cognome'=>'rossi',
        'eta'=>25,
    ];
    echo '<h2>Persona </h2>';
    foreach($persona as $chiave=>$valore){
        echo'<p>'.$chiave.' => '.$valore."</p>";
    }
    //todo array bidimenzionale
    $scuola=[
        ['Luca','Marco','Anna'],
        ['Leonardo','Mattia','Paola'],
    ];echo '<h2>Scuola </h2>';
    for ($classe=0; $classe < count($scuola); $classe++) { 
        echo '<p>'.'Classe '. $classe . '</p>';
        for ($alunno=0; $alunno<count($scuola[$classe]); $alunno++) { 
            echo '- '. $scuola[$classe][$alunno].'<br>';
        }
    }
    //todo ordinamento
    echo '<h2>Ordinamento </h2>';
    sort($citta); echo '<p><b>Sort</b>: ';print_r($citta);echo'</p>';
    rsort($citta); echo '<p>Rsort: ';print_r($citta);echo'</p>';

    ksort($citta); echo '<p>Ksort: ';print_r($citta);echo'</p>';
    krsort($citta); echo '<p>Krsort: ';print_r($citta);echo'</p>';

    asort($citta); echo '<p>Asort: ';print_r($citta);echo'</p>';
    arsort($citta); echo '<p>Arsort: ';print_r($citta);echo'</p>';
    //todo modifiche
    echo '<h2>Modifiche </h2>';
    array_push($citta, "Palermo");  echo '<p>Push: ';print_r($citta);echo'</p>';
    array_pop($citta);              echo '<p>Pop: ';print_r($citta);echo'</p>';
    array_unshift($citta,'Catania');echo '<p>Unshift: ';print_r($citta);echo'</p>';
    array_shift($citta);            echo '<p>Shift: ';print_r($citta);echo'</p></div>';
?>

<?php //fix FUNZIONI
    echo'<h1>Funzioni</h1><div>';
    //todo FUNZIONE CON NOME
    function saluta(){ echo '<p>Funzione con nome: OUTPUT</p>';}
    saluta();
    //todo FUNZIONE ANONIMA
    $prova=function(){echo'<p>Funzione anonima: OUTPUT</p>';};
    $prova();
    //todo FUNZIONE CON PARAMETRI
    function somma(int $v1, int $v2=11): int{
        $somma=$v1+$v2;
        return $somma;
    }
    $numero=10;  
    echo'<p> Funzione con parametri: '.somma($numero,).'</p></div>';
?>


<style>
    h1{border-bottom:1px solid white;}
    *{background:#00000050; color:white; padding:4px;}
</style> 