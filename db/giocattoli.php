<?php 

    class Toys extends Product{
        
        public $material;
        public $form;
        
        public function __construct(

            string $name,
            string $image,
            float $price,
            string $category,
            string $available,
            string $material,
            string $form

        ){
            
            $this->material = $material;
            $this->form = $form;
            parent ::__construct($name, $image, $price, $category, $available);
        }

    }
?>