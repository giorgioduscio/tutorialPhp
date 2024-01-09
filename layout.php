<?php require('funzioni.php');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Layout</title>
    </head>
    <body>
        <header>
            <h1>Header</h1>
        </header>
        <nav>
            <?php include('menu.html');?>
        </nav>
        <section>
            <?php
                home();
                articolo1();
            ?>            
        </section>
        <footer>
            <p>Footer</p>
        </footer>
    </body>
</html>


<style>
    *{background:#50505050; color:white; margin:0; padding:1%;}
    html{background:#202020;}
    form{display: flex; flex-direction: column;}
    h1{border-bottom:1px solid white;margin-top:10px;}
</style>

<!-- <rel="stylesheet" href="stile.css">-->