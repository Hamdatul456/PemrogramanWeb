<?php
namespace Products;

abstract class Electronics {
    protected $brand;
    protected $price;

    public function __construct($brand, $price) {
        $this->brand = $brand;
        $this->price = $price;
    }

    // Abstract method
    abstract public function getInfo();

    // Magic method to convert object to string
    public function __toString() {
        return "Brand: $this->brand, Price: $this->price";
    }
}
?>
