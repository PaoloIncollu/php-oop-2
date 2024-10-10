<?php

include __DIR__ .'/db/prodotto.php';
include __DIR__ .'/db/categorie/cibo.php';
include __DIR__ .'/db/categorie/cucce.php';
include __DIR__ .'/db/categorie/giocattoli.php';

$product = new Home ('Reggia', 'https://www.focusjunior.it/content/uploads/site_stored/imgs/0003/046/1hacienda.jpg', '1298,99£', 'cane', 'true', 'cemento e mattoni', 'M: L120 x P62 x H153 cm ');

var_dump ($product);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>

        <header>
            
        </header>

        <main id="app">
           
        </main>
        
        <!-- Vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- Axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!-- My JS -->
        <script src="js/scripts.js"></script>
    </body>
</html>