<!DOCTYPE html>
<html lang="en">
    
    <head>
                <title>Tutorial php</title>
    </head>
    <body>
        <article>
            <h1>Form esempio</h1>        
            <form action="/" method="post">
                <input id="nome" name="nome" type="text" placeholder="Nome"><br>
                <input id="cognome" name="cognome"  type="text" placeholder="Cognome"><br>
                <button type="submit">Invio</button>
            </form>            
        </article>


        <!-- todo IF HTML -->
        <article><h1>Verifica condizione</h1> <?php $nome='orazio';?>
            <?php if($nome=='Orazio'): ?>
            <p>Prima condizione verificata</p>
            <?php elseif($nome=='Mauro'): ?>
            <p>Seconda condizione verificata</p>
            <?php else: ?>
            <p>Condizione predefinita</p>
            <?php endif; ?>            
        </article>

        <!-- todo LOOP HTML -->
        <article> <h1>Lista Loop</h1>
            <ul>
                <?php for ($i=0;$i<6;$i++):?>
                    <li><?php echo $i?>) List items </li>
                <?php endfor;?>
            </ul>            
        </article>

        <!-- fix ARRAY -->
        <article> <h1>Array</h1>
            <?php 
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
                array_shift($citta);            echo '<p>Shift: ';print_r($citta);echo'</p>';
                ?>
        </article>

        <!-- fix FUNZIONI -->
        <article><h1>Funzioni</h1>
            <?php 
                //todo FUNZIONE CON NOME
                function functionName(){ echo '<p>Funzione con nome: OUTPUT</p>';}
                functionName();
                //todo FUNZIONE ANONIMA
                $prova=function(){echo'<p>Funzione anonima: OUTPUT</p>';};
                $prova();
                //todo FUNZIONE CON PARAMETRI
                function somma(int $v1, int $v2=11): int{
                    $somma=$v1+$v2;
                    return $somma;
                }
                $numero=10;  
                echo'<p> Funzione con parametri: '.somma($numero,).'</p>';
            ?>
        </article>

        <!-- fix DATA -->
        <article><h1>Data temporale</h1>
            <?php 
                //todo DATE()
                $date=date('H:m:s | D d-M m-Y',time());
                echo'<p>Data corrente: '.$date.'</p>';
                //todo ottenere il timestamp
                $timeStamp=mktime(12,30,0,  8,3,2001);
                echo'<p>Timestamp: '.$timeStamp.'</p>';
                //todo calcoli con i giorni
                $leggibilità=date('D d-M-Y', strtotime('now'.' -500 years'));
                echo'<p>Data con operazione: '.$leggibilità.'</p>';

            ?>            
        </article>

        <!-- todo Regex -->
        <article> <h1>Regex</h1>
            <?php 
                $testo='Oggi è una bellissima giornata';
                $pattern="/Og[gk]i/";
                if(!preg_match($pattern, $testo)){
                    echo '<p>Mach trovato</p>';
                }else{
                    echo '<p>Mach non trovato</p>';
                }
            
            ?>
        </article>
    </body>
</html>
<style>
    *{background:#50505050; color:white; margin:0; padding:1%;}
    html{background:#202020;}
    form{display: flex; flex-direction: column;}
    h1{border-bottom:1px solid white;}
    article{border-left:5px solid white; margin-bottom:10px;}
</style>