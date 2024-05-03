<?php

class Toys extends Product {
  public $color;
  
  function __construct(string $_name, string $_category, string $_price, string $_color){
    parent::__construct($_name, $_category, $_price);
    $this->color = $_color;
  }
}