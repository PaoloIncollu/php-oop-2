<?php 
    include __DIR__ .'../prodotto.php';
    class Food extends Product{
        
        public $ingredients;
        public $package;
       
        public function __construct(
            string $name,
            string $image,
            float $price,
            string $category,
            string $available,
            string $ingredients,
            string $package

        ){
            
            $this->ingredients = $ingredients;
            $this->package = $package;
            parent ::__construct($name, $image, $price, $category, $available);
        }

    }
?>