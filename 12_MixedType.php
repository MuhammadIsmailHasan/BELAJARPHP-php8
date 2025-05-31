<?php
/*
    Karena php 8 telah mendukung union types, kita bisa menggunakan tipe data campuran (mixed) pada parameter atau return type.
    mixed type adalah tipe data yang bisa menerima berbagai macam tipe data, seperti string, integer, array, dan lain-lain.
    Ini membuat kode lebih fleksibel dan mudah digunakan, terutama ketika kita tidak tahu tipe data apa yang akan diterima atau dikembalikan.
    Namun, kita harus berhati-hati dalam menggunakan mixed type, karena bisa membuat kode sulit dipahami dan dipelihara.
*/

function mixedTypeCheck(mixed $value): mixed
{
    if (is_string($value)) {
        return "String: " . $value;
    } elseif (is_int($value)) {
        return "Integer: " . $value;
    } elseif (is_array($value)) {
        return "Array: " . implode(", ", $value);
    } else {
        return "Unknown type";
    }
}

// Contoh penggunaan
echo mixedTypeCheck("Hello") . PHP_EOL; // String: Hello
echo mixedTypeCheck(123) . PHP_EOL; // Integer: 123
echo mixedTypeCheck([1, 2, 3]) . PHP_EOL; // Array: 1, 2, 3
echo mixedTypeCheck(null) . PHP_EOL; // Unknown type
echo mixedTypeCheck(3.14) . PHP_EOL; // Unknown type
echo mixedTypeCheck(new stdClass()) . PHP_EOL; // Unknown type    
