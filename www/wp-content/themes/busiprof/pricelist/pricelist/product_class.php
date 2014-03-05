<?php
//product class

class Product{
    
    public $id;
    public $name;
    public $dimensions;
    public $unit;
    public $price;
    
    public function __construct($option = null){
        if (is_object($option)){
            $this->id = $option->id;
            $this->name = $option->name;
            $this->dimension = $option->dimension;
            $this->unit = $option->unit;
            $this->price = $option->price;
        }elseif(is_array($option)){
            $this->id = $option['id'];
            $this->name = $option['name'];
            $this->dimension = $option['dimension'];
            $this->unit = $option['unit'];
            $this->price = $option['price'];
        }  
    }
    
    
}

?>