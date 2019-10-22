<?php

class dog
{
var $name;
var $color;
var $height;
var $length;
var $weight;
var $breed;
var $has_fleas;

public function de_flea(){
    if ($this->has_fleas){
        $this->has_fleas = false;
    }
}

}