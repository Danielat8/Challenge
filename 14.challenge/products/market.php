<?php



class MarketStall
{
    public $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function addProductToMarket($product)
    {
        $this->products[$product->getName()] = $product;
    }

    public function getItem($name, $amount)
    {
        if (array_key_exists($name, $this->products)) {
            return ['amount' => $amount, 'item' => $this->products[$name]];
        } else {
            return false;
        }
    }
}
