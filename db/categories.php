<?php 

    class Categories{
        
        public $name;
        public $icon;
        
        public function __construct(

            string $name,
            string $icon
        
        ){
            
            $this->name = $name;
            $this->icon = $icon;
           
        }

    }

    
?>