<?php
namespace Products;

require_once "Electronics.php";
require_once "Discountable.php";

class Smartphone extends Electronics {
    use Discountable;

    private $cameraQuality;

    public function __construct($brand, $price, $cameraQuality) {
        parent::__construct($brand, $price);
        $this->cameraQuality = $cameraQuality;
    }

    public function getInfo() {
        return "Smartphone: {$this->brand}, Camera Quality: {$this->cameraQuality} MP, Final Price: {$this->getFinalPrice()}";
    }
}
?>
