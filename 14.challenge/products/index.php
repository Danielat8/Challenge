<?php

require_once __DIR__ . '/orange.php';
require_once __DIR__ . '/potato.php';
require_once __DIR__ . '/nuts.php';
require_once __DIR__ . '/kiwi.php';
require_once __DIR__ . '/pepper.php';
require_once __DIR__ . '/strawberry.php';
require_once __DIR__ . '/raspberry.php';
require_once __DIR__ . '/market.php';
require_once __DIR__ . '/cart.php';

// part one
$orange = new Product('Orange',  35, true);
$potato = new Product('Potato', 40, false);
$nuts = new Product('Nuts',  35, true);
echo "<h2>This is first part</h2>";
echo "Orange " . $orange->getPrice() . $orange->getSellingMode();
echo "<br>";
var_dump($orange);
echo "<br>";
echo "<br>";
echo  "Potato " . $potato->getSellingMode();
echo "<br>";
var_dump($potato);
echo "<br>";
echo "<br>";
echo "Nuts " . $nuts->getSellingMode();
echo "<br>";
var_dump($nuts);
echo "<br>";
echo "<hr>";
echo "<hr>";
echo "<hr>";

echo "<h2>This is second part</h2>";

$marketStall = new MarketStall(['orange' => $orange, 'potato' => $potato, 'nuts' => $nuts]);
print_r($marketStall->getItem('orange', 4));


echo "<hr>";
echo "<hr>";
echo "<hr>";

echo "<h2>This is third part</h2>";

$marketStall1 = new MarketStall(['orange' => $orange, 'potato' => $potato]);
$cart = new Cart();
$cart->addToCart($marketStall1->getItem('orange', "20")) . "<br>";
echo "<br>";
$cart->addToCart($marketStall1->getItem('potato', "20")) . "<br>";
$cart->printReceipt();
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<hr>";
echo "<h2>This is fourth part </h2>";

//  part 4 
$kiwi = new Product('kiwi', 40, false);
$pepper = new Product('pepper',  35, true);
$raspberry = new Product('Raspberry', 40, false);
$strawberry = new Product('Strawberry', 45, true);
$marketStall2 = new MarketStall(['kiwi' => $kiwi, 'pepper' => $pepper]);
$marketStall3 = new MarketStall(['Strawberry' => $strawberry, 'Raspberry' => $raspberry]);


$cart = new Cart();
$cart->addToCart($marketStall3->getItem('Raspberry', 11,));
$cart->addToCart($marketStall3->getItem('Strawberry', 10,));
$cart->addToCart($marketStall2->getItem('kiwi', 33));
$cart->addToCart($marketStall2->getItem('pepper', 22));

$cart->printReceipt();
echo "<hr>";
