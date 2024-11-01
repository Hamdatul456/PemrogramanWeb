<?php
namespace Products;

require_once "Electronics.php";
require_once "Discountable.php";

class Laptop extends Electronics {
    use Discountable;

    private $processor;

    public function __construct($brand, $price, $processor) {
        parent::__construct($brand, $price);
        $this->processor = $processor;
    }

    public function getInfo() {
        return "Laptop: {$this->brand}, Processor: {$this->processor}, Final Price: {$this->getFinalPrice()}";
    }
}
?>
