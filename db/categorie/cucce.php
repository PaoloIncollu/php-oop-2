
<?php 
include_once __DIR__ .'../prodotto.php';
    class Home extends Product{
        
        public $material;
        public $size;
        
        public function __construct(
            string $name,
            string $image,
            float $price,
            string $category,
            string $available,
            string $material,
            string $size

        ){
            
            $this->material = $material;
            $this->size = $size;
            parent ::__construct($name, $image, $price, $category, $available);
        }

    }
    
?>    
