<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- rel="stylesheet" href="stile.css">-->
        <title>Tutorial php</title>
    </head>
    <body>
        <h1>Form esempio</h1>
        <?php $nome='Orazio'
        ?>
        <p>Nome <?php echo $nome;?></p>
        <form action="esempio.php" method="post">
            <input id="nome" name="nome" type="text" placeholder="Nome"><br>
            <input id="cognome" name="cognome"  type="text" placeholder="Cognome"><br>
            <button type="submit">Invio</button>
        </form>
    </body>
</html>
<style>
    *{padding:1%;margin:0;background:#50505050;}
    html{background:#202020;}
    form{display: flex; flex-direction: column;}
</style>