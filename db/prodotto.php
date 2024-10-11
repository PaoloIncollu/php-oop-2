<?php 
require_once __DIR__ .'/cucce.php';
require_once __DIR__ .'/giocattoli.php';
require_once __DIR__ .'/categories.php';
    
class CategoryNameError extends Exception {

}
 
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
            if($category == 'Cani' || $category == 'Gatti'){
                $this->category = $category; 
            }
            else {

                
                throw new CategoryNameError('Categoria inserita non presente nell\'E-Commerce');
            }
        
            
            $this->available = $available; 
        }

        

    }

    trait Material {
        public $material;
    
        public function getMaterial(){
    
            return $this->material;
        }
    }
?>