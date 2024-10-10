<?php

require_once __DIR__ .'/db/prodotto.php';
require_once __DIR__ .'/db/cibo.php';
require_once __DIR__ .'/db/cucce.php';
require_once __DIR__ .'/db/giocattoli.php';

$products_home = [
    new Home ('Reggia Superior', 'https://www.focusjunior.it/content/uploads/site_stored/imgs/0003/046/1hacienda.jpg', '1298.99', 'Cani', 'In Quantità', 'Cemento e Mattoni', 'M: L120 x P62 x H153 cm '),
    new Home ('Cuccia Domus', 'https://arcaplanet.vtexassets.com/arquivos/ids/227349/canile-domus-mini.jpg?v=637454792222500000', '98.29' , 'Gatti', 'In Quantità', 'Legno', 'M: L30 x P42 x H60 cm ')

];

$products_food= [

    new Food ('Ultima Cat Adult', 'https://media.zooplus.com/bilder/8/400/203613_pla_affinityspain_ultima_cat_adunlt_huhn_es_10kg_hs_01_8.jpg', '40.50', 'Gatti', 'In Assortimento', 'Pollo', 'Ultima'),
    new Food ('Maxi adult 15 kg', 'https://www.albericianimalifelici.it/shop/sysimages/thumbnails/300x300_images_royal_canin_maxi_adult.jpg', '55.99', 'Cani', 'Limitata', 'Carne Mista', 'Royal Canin')
];

$products_toys= [

    new Toys ('Maialino', 'https://media.zooplus.com/bilder/2/400/60797_pla_latexschwein_large_fg_5575_2.jpg', '5.68', 'Cani', 'In Assortimento', 'Lattice', 'Animale'),
    new Toys ('Gomitolo', 'https://media.zooplus.com/bilder/2/400/212927_pla_karlie_sisal_spielbaelle_mit_feder_rasseln_blau_2.jpg', '9.89', 'Gatti', 'Limitata', 'Cotone', 'Palla')
] ;
    


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!--css-->

        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <header>
            
        </header>

        <main>

            <div class="row w-75 my-5 mx-auto">

            <?php
            
            foreach ($products_home as $product) {
               
            ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <div>

                            <img src="<?php echo $product->image ?>" alt="" class="card-img-top my-img">
                            
                        </div>
                        <div class="card-body my-card-body">
                            <h3 class="card-title">
                                <?php echo $product->name ?>
                            </h3>
                            <div class="card-text">

                                <h4>

                                    Prodotto per <?php echo $product->category ?>

                                </h4>

                                <div>

                                    <span class="fs-5">Prezzo da listino:</span>
                                    <span><?php echo $product->price ?>  &euro;</span>
                                                                          
                                </div>
                                
                                <div>
                                    <span>Disponibilità: </span>

                                    <span><?php echo $product->available ?></span>
                                    

                                </div>
                                
                                
                                <div>

                                    <span>Materiale:</span>

                                    <span><?php echo $product->material ?></span>
                                    
                                </div>
                                <div>
                                    
                                    <span>Materiale:</span>

                                    <span><?php echo $product->size ?></span>
                                </div>
                                
                                
                            </div>

                        </div>
                    </div>
                </div>
            <?php
                }
            ?>

            <?php
            
            foreach ($products_food as $product) {
               
            ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <div>

                            <img src="<?php echo $product->image ?>" alt="" class="card-img-top my-img">
                            
                        </div>
                        <div class="card-body my-card-body">
                            <h3 class="card-title">
                                <?php echo $product->name ?>
                            </h3>
                            <div class="card-text">

                                <h4>

                                    Prodotto per <?php echo $product->category ?>

                                </h4>

                                <div>

                                    <span class="fs-5">Prezzo da listino:</span>
                                    <span><?php echo $product->price ?>  &euro;</span>
                                                                          
                                </div>
                                
                                <div>
                                    <span class="fs-5">Disponibilità: </span>

                                    <span><?php echo $product->available ?></span>
                                    

                                </div>
                                
                                
                                <div>

                                    <span class="fs-5">Ingredienti:</span>

                                    <span><?php echo $product->ingredients ?></span>
                                    
                                </div>
                                <div>
                                    
                                    <span class="fs-5">Marca:</span>

                                    <span><?php echo $product->brand ?></span>
                                </div>
                                
                                
                            </div>

                        </div>
                    </div>
                </div>
            <?php
                }
            ?>

            <?php
            
            foreach ($products_toys as $product) {
               
            ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <div>

                            <img src="<?php echo $product->image ?>" alt="" class="card-img-top my-img">
                            
                        </div>
                        <div class="card-body my-card-body">
                            <h3 class="card-title">
                                <?php echo $product->name ?>
                            </h3>
                            <div class="card-text">

                                <h4>

                                    Prodotto per <?php echo $product->category ?>

                                </h4>

                                <div>

                                    <span class="fs-5">Prezzo da listino:</span>
                                    <span><?php echo $product->price ?>  &euro;</span>
                                                                          
                                </div>
                                
                                <div>
                                    <span class="fs-5">Disponibilità: </span>

                                    <span><?php echo $product->available ?></span>
                                    

                                </div>
                                
                                
                                <div>

                                    <span class="fs-5">Materiale:</span>

                                    <span><?php echo $product->material ?></span>
                                    
                                </div>
                                <div>
                                    
                                    <span class="fs-5">Forma:</span>

                                    <span><?php echo $product->form ?></span>
                                </div>
                                
                                
                            </div>

                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
                
            </div>
           
        </main>
        
        <!-- Vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- Axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!-- My JS -->
        <script src="js/scripts.js"></script>
    </body>
</html>