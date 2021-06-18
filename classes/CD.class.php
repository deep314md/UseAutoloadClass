<?php

class CD extends Product{

    public $lenghtAudio;

    public function __construct($title, $price, $amounts, $lenghtAudio){

        parent::__construct($title, $price, $amounts);
        $this->lenghtAudio = $lenghtAudio;
        echo $this->getCostOneMinute();

    }


    public function getCostOneMinute(){

        $price = "\npretul per minuta: " . round($this->price/$this->lenghtAudio,2) ." LEI/min" ;
        return $price;

    }

}

