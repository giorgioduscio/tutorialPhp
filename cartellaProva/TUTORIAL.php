<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Tutorial php</title>
        <?php // todo Cookie, Sessioni
            setcookie("username", "Luca Rossi", time()+(60*60*24*30));
            // setcookie("username", "", time() - 3600);
            session_start();
        ?>
    </head>
    <body>
<!-- fix -->
        <!-- todo FORM -->
        <article> <h1>Form</h1>    

            <form action="http://127.0.0.1/tutorial_php/TUTORIAL.php?" method="post">
                <input id="email" name="email" type="text" placeholder="Email"><br>
                <input id="password" name="password"  type="password" placeholder="Password"><br>
                <button type="submit">Invio</button>
            </form>
            <?php 
                $email=$_POST["email"];
                $password=$_POST["password"];
                echo "<p>Email: ".$email."</p><p>Password: ".$password."</p>";
            ?>
        </article>

        <!-- todo IF HTML -->
        <article><h1>Verifica condizione</h1> <?php $nome="orazio";?>
            <?php if($nome=="Orazio"): ?>
            <p>Prima condizione verificata</p>
            <?php elseif($nome=="Mauro"): ?>
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

        <!-- todo ARRAY -->
        <article> <h1>Array</h1>
            <?php 
                //todo Città
                $citta=["milano","firenze","roma"];    
                echo "<h2>Città </h2>";
                for ($i=0; $i<count($citta); $i++) { 
                    echo "<p>".$i.") ".$citta[$i] . "</p>";
                    if($i==1){break;}
                } 
                //todo array associativo e for each
                $persona=[
                    "nome"=>"Luca",
                    "cognome"=>"rossi",
                    "eta"=>25,
                ];
                echo "<h2>Persona </h2>";
                foreach($persona as $chiave=>$valore){
                    echo"<p>".$chiave." => ".$valore."</p>";
                }
                //todo array bidimenzionale
                $scuola=[
                    ["Luca","Marco","Anna"],
                    ["Leonardo","Mattia","Paola"],
                ];echo "<h2>Scuola </h2>";
                for ($classe=0; $classe < count($scuola); $classe++) { 
                    echo "<p>"."Classe ". $classe . "</p>";
                    for ($alunno=0; $alunno<count($scuola[$classe]); $alunno++) { 
                        echo "- ". $scuola[$classe][$alunno]."<br>";
                    }
                }
                //todo ordinamento
                echo "<h2>Ordinamento </h2>";
                sort($citta); echo "<p><b>Sort</b>: ";print_r($citta);echo"</p>";
                rsort($citta); echo "<p>Rsort: ";print_r($citta);echo"</p>";

                ksort($citta); echo "<p>Ksort: ";print_r($citta);echo"</p>";
                krsort($citta); echo "<p>Krsort: ";print_r($citta);echo"</p>";

                asort($citta); echo "<p>Asort: ";print_r($citta);echo"</p>";
                arsort($citta); echo "<p>Arsort: ";print_r($citta);echo"</p>";
                //todo modifiche
                echo "<h2>Modifiche </h2>";
                array_push($citta, "Palermo");  echo "<p>Push: ";print_r($citta);echo"</p>";
                array_pop($citta);              echo "<p>Pop: ";print_r($citta);echo"</p>";
                array_unshift($citta,"Catania");echo "<p>Unshift: ";print_r($citta);echo"</p>";
                array_shift($citta);            echo "<p>Shift: ";print_r($citta);echo"</p>";
                ?>
        </article>

        <!-- todo FUNZIONI -->
        <article><h1>Funzioni</h1>
            <?php 
                //todo FUNZIONE CON NOME
                function functionName(){ echo "<p>Funzione con nome: OUTPUT</p>";}
                functionName();
                //todo FUNZIONE ANONIMA
                $prova=function(){echo"<p>Funzione anonima: OUTPUT</p>";};
                $prova();
                //todo FUNZIONE CON PARAMETRI
                function somma(int $v1, int $v2=11): int{
                    $somma=$v1+$v2;
                    return $somma;
                }
                $numero=10;  
                echo"<p> Funzione con parametri: ".somma($numero,)."</p>";
            ?>
        </article>

        <!-- todo DATA -->
        <article><h1>Data temporale</h1>
            <?php 
                //todo DATE()
                $date=date("H:m:s | D d-M m-Y",time());
                echo"<p>Data corrente: ".$date."</p>";
                //todo ottenere il timestamp
                $timeStamp=mktime(12,30,0,  8,3,2001);
                echo"<p>Timestamp: ".$timeStamp."</p>";
                //todo calcoli con i giorni
                $leggibilità=date("D d-M-Y", strtotime("now"." -500 years"));
                echo"<p>Data con operazione: ".$leggibilità."</p>";

            ?>            
        </article>

        <!-- todo Regex -->
        <article> <h1>Regex</h1>
            <?php 
                // todo C"è occorrenza?
                $testo="Oggi è una bellissima giornata";
                $pattern="/[e]/";
                if(preg_match($pattern, $testo)){
                    echo "<p>Match binario: TROVATO</p>";
                }else{ echo "<p>Match binario: NON TROVATO</p>"; }

                // todo Quante occorrenze?
                $matches=preg_match($pattern, $testo, $array);
                echo "<p>Match occorrenze: ".$matches." TROVATI</p>";

                echo"<h2>Quantificatori</h2>";
                $pattern="/[\s,]+/";
                $testo="My favorite colors are red, green and blue";
                $parts=preg_split($pattern, $testo);
                foreach($parts as $part){ echo "<p>".$part."</p>"; }

                echo"<h2>Ancore</h2>";
                $pattern="/[*M]+/";
                $names=array("Marco rossi","Luca Verdi","Mattia Gialli");
                $matches=preg_grep($pattern,$names);
                foreach($matches as $match){ echo "<p>".$match."</p>"; }

                echo"<h2>Limiti</h2>";
                $pattern="/\bcar\w*/";
                $text="<p>Words benining whith car: car, carrot, cartoon.</p><p>Word ending with car: scar, oscar, supercar</p>";
                $replacement="<b>$0</b>";
                echo preg_replace($pattern,$replacement,$text);
            ?>
        </article>

        <!-- todo Leggere e scrivere File -->
        <article><h1>Gestione file</h1><?php // Accertati di aver creato prima il file
            $nomeFile="nomeNuovo.txt"; 
            if (file_exists($nomeFile)) { 
                $file=fopen($nomeFile,"r");//Lettura
                $content=fread($file,filesize($nomeFile));

                $testo="Ciao. Sono una frase dinamica!";
                $file=fopen($nomeFile,"w");//Scrittura
                fwrite($file, $testo);

                $file=fopen($nomeFile,"a");//Append
                fwrite($file, $testo);


                echo "<p>Contenuto: ".$content."</p>";
                fclose($file);

                // Rinomina 
                // rename($nomeFile,"nomeNuovo.txt");
                // Elimina 
                // unlink($nomeFile);
            }else{ echo "<p>Il file non esiste</p>"; }
        ?></article>

        <!-- todo Gestione cartelle -->
        <article><h1>Gestione cartelle</h1><?php
          echo"<h2> Crea cartella e copia file al suo interno</h2>";
            $nomeCartella="cartellaProva";
            $nomeFile="fileProva.txt";
            $nuovoFile= $nomeCartella."/".$nomeFile;

            if (file_exists($nomeFile)) {
                if(copy($nomeFile,$nuovoFile)){ 
                    echo"<p>Operazione eseguita con successo</p>"; 
                }else{ 
                    echo "<p>Operazione non eseguita</p>"; 
                }
            }else{echo "<p>Elemento già esistente</p>";}

            echo"<h2>Mostra file</h2>";
            function mostraFile($path){
                if (file_exists($path) && is_dir($path)) {//Il file esiste?
                    $result=scandir($path);//Allora mostra ciò che c"è dentro
                    
                    $files=array_diff($result, array(".",".."));//crea file e togli elementi
                    // print_r($result);
                    // print_r($files);

                    if(count($files)>0){
                        foreach ($files as $file) {
                            if (is_file("$path/$file")) {
                                echo"<p>"."$path / $file"."</p>";
                            }elseif (is_dir("$path/$file")) {
                                mostraFile("$path/$file");
                            }
                        }
                    }else{ echo"<p>ERRORE: Non sono stati trovati file in questa cartella</p>"; }
                }else { echo"<p>ERRORE: La cartella non esiste</p>"; }
            } mostraFile("cartellaProva");

            echo"<h2>Il tipo di file nella cartella</h2>";
            $files=glob("cartellaProva/*.txt");//prende tutti i txt dalla cartella
            foreach($files as $file){
                echo "<p>".basename($file)." (size: ".filesize($file)." bytes)</p>";
            }
        ?></article>

        <!-- todo caricamento file -->
        <article><h1>Caricamento file</h1>
            <form action="http://127.0.0.1/tutorial_php/TUTORIAL.php" method="post" enctype="multipart/form-data">
                <p for="fileSelect">File:</p>
                <input type="file" name="photo" id="fileSelect">
                <input type="submit" name="submit" value="Carica">
                <p><strong>Nota</strong>: sono supportati solo formati .jpg, .jpeg, .gif, .png con una grandezza di massimo 5mb</p>
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"]=="POST") {
                    if ( isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0 ) {
                        $estenzioniPermesse=array("jpg"=>"image/jpg","jpeg"=>"image/jpeg","gif"=>"image/gif","png"=>"image/png");
                        $nomeFile=$_FILES["photo"]["name"];
                        $tipoFile=$_FILES["photo"]["type"];
                        $dimenzioneFile=$_FILES["photo"]["size"];

                       // Verifica estenzione file
                        $estenzione=pathinfo($nomeFile, PATHINFO_EXTENSION);
                        if (!array_key_exists($estenzione, $estenzioniPermesse)) {
                            die("<p>Errore 1: seleziona un formato valido</p>");
                        }else{echo"<p>Controllo estenzione superato</p>";}

                       // Verifica grandezza 5mb
                        $dimenzioneMassima=5*1024*1024;
                        if ($dimenzioneFile>$dimenzioneMassima) {
                            die("<p>Errore 2: La grandezza è superiore al limite</p>");
                        }else{echo"<p>Controllo dimenzione superato</p>";}

                       // Verifica il tipo di file
                        if(in_array($tipoFile, $estenzioniPermesse)){//controlla se il file si trova tra i valori dell'array (è permesso)
                            // controllare se il file esiste già
                            if (file_exists("cartellaProva/$nomeFile")) {
                                echo"<p>Errore 3: Il file $nomeFile esiste già</p>";
                            }else{ /*fix Carica il file*/
                                echo"<p>Controllo omonimie superato</p>";
                                move_uploaded_file($_FILES["photo"]["tmp_name"],"cartellaProva/$nomeFile");
                                echo"<p>Il tuo file è stato caricato con successo</p>";
                            }
                        }

                    }else{echo"<p>Errore di caricamento del file. Riprova.</p>";}
                }else{echo"<p>Errore 4: ".$_FILES["photo"]["error"]."</p>";}
            ?>
        </article>

        <!-- todo cookie inserire prima di ogni output o elemento HTML-->
        <article><h1>Gestione cookie</h1><?php 
            
            if(isset($_COOKIE["username"])){
            echo"<p>".$_COOKIE["username"]."</p>";
            }else{ echo"<p>Nessun cookie disponibile</p>"; }
            
        ?></article>

        <!-- todo Sessioni inserire prima di ogni output o elemento HTML -->
        <article><h1>Gestione delle Sessioni</h1><?php
            
            $_SESSION["userId"]="Valore sessione";
            
            // unset($_SESSION["userId"]);
            echo "<p>".$_SESSION["userId"]."</p>";
            // session_destroy();
        ?></article>

        <!-- todo inviare email -->
        <article><h1>Inviare email</h1><?php
            $from="corsophp@gmail.com";
            $to="qwerty@gmail.com";
            $subject="email di prova";
            $message="Mail dal corso";

            if( mail($to,$subject,$message) ){
                echo"<p>Email mandata con successo</p>";
            }else{ echo"<p>Email non mandata</p>"; }

            // fix mandare html
            $headers="MIME-Version 1.0"."\r\n";
            $headers.="Content-type: text/html; charset=iso-8859-1"."\r\n";
            $headers.="from $from"."\r\n";

            $message="<html><body>";
            $message.="<h1>Titolo della mail</h1>";
            $message.="</body></html>";

            if( mail($to,$subject,$message,$headers) ){
                echo"<p>Email mandata con successo</p>";
            }else{ echo"<p>Email non mandata</p>"; }
        ?></article>
<!-- fix -->
        <!-- todo lavorare con json -->
        <article><h1>Lavorare con json</h1><?php
        ?></article>
    </body>
</html>

<script> // fix lavorare con json
    let formData=new formData();
    formData.append('data','colori');// form a cui appendiamo dei dati

    fetch('backEnd.php',{
        method:'POST',
        body:formData
    })
    .then(responce=> responce.json())
    .then(data=> console.log(data));
</script>

<style>
    *{background:#50505050; color:white; margin:0; padding:1%;}
    html{background:#202020; display: flex; flex-direction: column; align-items: center;}
    body{max-width:800px;}

    form{display: flex; flex-direction: column;}
    h2{padding-top:20px;} h1{border-bottom:1px solid white;}
    article{border-left:5px solid white; margin-bottom:10px;}
</style>
