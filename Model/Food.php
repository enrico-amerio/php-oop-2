<?php

require_once __DIR__ . '/Discount.php';
class Food extends Product {
  public $grams;
  use Discount;

  function __construct(string $_img, string $_name, string $_category, int $_price, int $_grams){
    parent::__construct($_img, $_name, $_category, $_price);
    $this->grams = $_grams;
  }
}