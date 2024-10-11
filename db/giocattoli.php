<?php 

    class Toys extends Product{
        
        use Material;
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