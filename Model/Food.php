<?php

class Food extends Product {
  public $grams;
  
  function __construct(string $_name, string $_category, string $_price, int $_grams){
    parent::__construct($_name, $_category, $_price);
    $this->grams = $_grams;
  }
}