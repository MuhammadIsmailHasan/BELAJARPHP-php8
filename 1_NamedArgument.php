<?php
/*
    Pada php versi lama, kita harus mengirimkan argumen sesuai dengan urutan
    Pada php 8, kita bisa mengirimkan argumen dengan named argument tanpa harus memerhatikan urutannya
*/
function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}
sayHello("John", "Doe", "Smith");

// Menggunakan named argument
sayHello(
    last: "Smith",
    first: "John",
    middle: "Doe"
);

// Kita juga bisa mengirimkan named argument sebagian
// Berikut contoh dengan default value di tengah
function sayHello2(string $first, string $middle = "", string $last): void
{
    echo "Hello 2, $first $middle $last" . PHP_EOL;
}
# sayHello2("Muhammad", "Hasan"); // ini error karena dianggap 2 argumen saja, argumen last belum di isi

sayHello2(
    first: "Muhammad",
    last: "Hasan"
);
