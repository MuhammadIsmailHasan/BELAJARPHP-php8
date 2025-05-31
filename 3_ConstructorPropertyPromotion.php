<?php
/*
    Constructor Property Promotion adalah fitur baru di PHP 8 yang memungkinkan kita untuk mendeklarasikan property class
    langsung di constructor, sehingga kita tidak perlu lagi mendeklarasikan property class secara terpisah.
    Dengan fitur ini, kita bisa menghemat kode dan membuat kode lebih bersih.

*/
class Product
{
    public function __construct(
        public string $name,
        public string $description = "",
        public int $price,
        private bool $isAvailable = true

    ) {
        //
    }
}


$product = new Product(
    name: "Samsung Galaxy S23",
    price: 10000000,
    isAvailable: false
);
var_dump($product);
