<?php

class Product {
  public $name;
  public $category;
  public $price;

  function __construct(string $_name, string $_category, string $_price)
  {
    $this->name = $_name;
    $this->category = $_category;
    $this->price = $_price;
  }
}