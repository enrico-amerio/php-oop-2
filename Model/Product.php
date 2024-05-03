<?php

class Product {
  public $img;
  public $name;
  public $category;
  public $price;

  function __construct(string $_img, string $_name, string $_category, int $_price)
  {
    $this->img = $_img;
    $this->name = $_name;
    $this->category = $_category;
    $this->price = $_price;
  }
}