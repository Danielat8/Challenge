<?php

class Cart
{
    private $cartItems = [];

    public function addToCart($itemcart)
    {
        array_push($this->cartItems, $itemcart);
    }

    public function printReceipt()
    {
        if (count($this->cartItems) == 0) {
            echo "Your cart is empty.";
        } else {
            $totalPrice = 0;
            foreach ($this->cartItems as $CartItem) {
                $itemcart = $CartItem['item'];
                $amount = $CartItem['amount'];
                echo "<br> ";
                $price = $itemcart->getPrice() * $amount;
                echo $itemcart->getName() . "|" .  $amount . "|" . $itemcart->getSellingMode() . "| total= " . $price . "<br>";
                $totalPrice += $price;
            }
            echo "<br> ";

            echo "Final price amount: " . $totalPrice . " denars" . "<br> ";
        }
    }
}
