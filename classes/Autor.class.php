<?php

class Autor{

    public $name_autor;
    public $surname_autor;
    public $product;
    public $type;

    const DA = 3.14;
    public function __construct($name_autor, $surname_autor, $title, $type_product, $price, $amounts, $units){
        
        echo "In class Autor \n";
        $this->name_autor = $name_autor;
        $this->surname_autor = $surname_autor;
        $this->type = $type_product;
        $this->product = $this->createProduct($title, $price, $amounts, $units);
       
    }

    
    public function pi(){

        return self::DA . "\n";

    }


    public static function func(){

        return "hihi";

    }





    public function createProduct($title, $price, $amounts, $units){

        if($this->type == "book"){

            return new Book($title, $price, $amounts, $units);

        } elseif ($this->type == "cd"){

            return new CD($title, $price, $amounts, $units);

        }

    }


    public function costPerUnit(){

        if($this->type == "book"){

            return $this->product->getCostOfPage();
        
        } elseif ($this->type == "cd"){
        
            return $this->product->getCostOneMinute();
        
        }

    }

    public function toArray(){

        $arr = [];

        $arr["name_autor"] =  $this->name_autor;
        $arr["surname_autor"] =  $this->surname_autor;
        $arr["type"] =  $this->type;

        foreach ($this->product as $key => $value) {
            $arr[$key] = $value;
        }

        return $arr;
    }


    public function save(){}

    public function update(){}

    public function delete(){}


}
