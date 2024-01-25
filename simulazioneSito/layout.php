<?php require('pagine.php');?>
    
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Layout</title>
        <link href="stile.css" rel="stylesheet" type="text/css">
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
            <article>
                <h1>Footer</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur eius laboriosam illum dolorem labore, impedit esse at explicabo, ipsam earum ad quidem! Sapiente quas earum magni itaque dolorem dolorum rerum?</p>
            </article>
        </footer>
    </body>
</html>
<script type="text/javascript" src="script.js"></script>
