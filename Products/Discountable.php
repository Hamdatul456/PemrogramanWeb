<?php
namespace Products;

trait Discountable {
    private $discount = 0;

    public function setDiscount($amount) {
        $this->discount = $amount;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function getFinalPrice() {
        return $this->price - $this->discount;
    }
}
?>
