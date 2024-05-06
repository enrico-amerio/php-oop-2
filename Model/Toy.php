<?php
require_once __DIR__ . '/Discount.php';
class Toy extends Product {
  public $color;
  use Discount;
  function __construct(string $_img, string $_name, string $_category, string $_price, string $_color){
    parent::__construct($_img, $_name, $_category, $_price);
    $this->color = $_color;
  }
}