<?php

require_once __DIR__ . '/product.php';


class Strawberry extends  Product
{
    public function __construct($name, $price, $sellingByKg)

    {
        parent::__construct($name, $price, $sellingByKg);
    }
}
