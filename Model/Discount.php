<?php
trait Discount {
  public $discountPercentage;

  public function applyDiscount(int $percentage)
  {
    if ($percentage < 0 || $percentage > 100) {
      throw new Exception("Discount percentage must be between 0 and 100.");
    }

    $this->discountPercentage = $percentage;
    return $this->price * (1 - $this->discountPercentage / 100);
  }
}
?>
