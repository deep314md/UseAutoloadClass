<?php

namespace MyApp\Objects\Product;

class Product {

    public $title;
    public $price;
    public $amounts;

    public function __construct($title, $price, $amounts){

        $this->title = $title;
        $this->price = $price;
        $this->amounts = $amounts;

    }



    public function getTitle(){
        
        $product = "\ntitle: {$this->title};\n";       
        return $product;

    }


    public function getIncome(){
        
        $income = "\npotention income: ($this->price*$this->amounts)\n";
        return $income;

    }

    public function set($key, $newValue){ // poate seta si numele 
        
        if (!$key || !$newValue) { return;}
        $this->$key = $newValue;

    }

    public function get($key){
        
        if (!isset($key) || !$key ) { return; }
        return $this->$key;

    }


}


