<?php
require_once __DIR__ . '/Discount.php';
class Bed extends Product {
  public $size;
  use Discount;
  function __construct(string $_img, string $_name, string $_category, string $_price, string $_size){
    parent::__construct($_img, $_name, $_category, $_price);
    $this->size = $_size;
  }
}