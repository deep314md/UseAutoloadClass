<?php

class Book extends Product{

    public $pages;
    public $type;


    public function __construct($title, $price, $amounts, $pages){
        
        $this->pages = $pages;
        parent::__construct( $title, $price, $amounts);

    }

  
    public function getCostOfPage(){

        $price = "\npretul pe foie:  " . round($this->price/$this->pages,2);
        return $price;

    }


}
