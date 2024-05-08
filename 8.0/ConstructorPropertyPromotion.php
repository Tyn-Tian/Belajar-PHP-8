<?php

class Product
{
    public function __construct(
        public string $id,
        public string $name,
        public int $price,
        public int $quantity,
        public bool $expensive
    ) {
    }
}

$product = new Product(
    id: "1",
    name: "Bakso",
    price: 18000,
    quantity: 1,
    expensive: false
);

var_dump($product);
echo $product->name . PHP_EOL;