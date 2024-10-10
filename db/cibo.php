<?php 
    
    class Food extends Product{
        
        public $ingredients;
        public $brand;
       
        public function __construct(
            string $name,
            string $image,
            float $price,
            string $category,
            string $available,
            string $ingredients,
            string $brand

        ){
            
            $this->ingredients = $ingredients;
            $this->brand = $brand;
            parent ::__construct($name, $image, $price, $category, $available);
        }

    }
?>