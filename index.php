<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- rel="stylesheet" href="stile.css">-->
        <title>Tutorial php</title>
    </head>
    <body>
        <h1>Form esempio</h1>
        <?php $nome='Mauro'?>
        <p>
            <a href="http://127.0.0.1/tutorial_php/esempio.php">index</a>
        </p>
        <form action="esempio.php" method="post">
            <input id="nome" name="nome" type="text" placeholder="Nome"><br>
            <input id="cognome" name="cognome"  type="text" placeholder="Cognome"><br>
            <button type="submit">Invio</button>
        </form>

<!-- todo IF HTML -->
        <?php if($nome=='Orazio'): ?>
        <p>Prima condizione verificata</p>
        <?php elseif($nome=='Mauro'): ?>
        <p>Seconda condizione verificata</p>
        <?php else: ?>
        <p>Condizione predefinita</p>
        <?php endif; ?>

<!-- todo LOOP HTML -->
        <ul>
            <?php for ($i=0;$i<6;$i++):?>
                <li><?php echo $i?>) List items </li>
            <?php endfor;?>
        </ul>

    </body>
</html>
<style>
    *{padding:1%;margin:0;background:#50505050;}
    html{background:#202020;}
    form{display: flex; flex-direction: column;}
</style>