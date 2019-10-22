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

    public function de_flea()
    {
        if ($this->has_fleas) {
            $this->has_fleas = 0;
        }
    }

    public function thin_down($how_much)
    {
        if ($this->weight) {
            $this->weight = $this->weight - $how_much;
        }
    }

    public function fatten_up($how_much)
    {
        if ($this->weight) {
            $this->weight = $this->weight + $how_much;
        }
    }

}