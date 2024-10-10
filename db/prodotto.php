<?php 

    class Product{
        
        public $name;
        public $image;
        public $price;
        public $category;
        public $available;
        
        public function __construct(

            string $name,
            string $image,
            float $price,
            string $category,
            string $available

        ){
            
            $this->name = $name;
            $this->image = $image;
            $this->price = $price;
            $this->category = $category; 
            $this->available = $available;     
        }

    }
?>