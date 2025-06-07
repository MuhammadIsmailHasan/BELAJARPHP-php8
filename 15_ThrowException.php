<?php

/*
    Dalam php, terdapat 2 istilah, yakni statement dan expression.
    Statement adalah perintah yang dieksekusi oleh PHP, seperti if, for, while, switch, dan lain-lain.
    Sedangkan expression adalah perintah yang menghasilkan nilai, seperti operasi matematika, string, array, dan lain-lain. contoh : a + b, "Hello World", [1, 2, 3], dan lain-lain.
    Expression bisa digunakan sebagai bagian dari statement, tetapi tidak sebaliknya.


    Pada php 7, exception merupakah sebuah statement, sehingga tidak bisa digunakan dalam contoh ternaty operator atau match expression.
    Pada php 8, exception sudah bisa digunakan sebagai expression, sehingga kita bisa menggunakan exception dalam contoh ternary operator atau match expression.

*/

// contoh penggunaan exception pada php 7
function validatePhp7(?string $name): string
{
    if ($name == null) {
        throw new Exception("Ini null php 7, exception berupa statemet jadi harus dimasukkan dalam block {}");
    }
    return "Hello, " . $name . PHP_EOL;
}


// contoh penggunaan exception pada php 8
function validatePhp8(?String $name): string
{
    $nameChecker = $name != null ? $name : throw new Exception("Ini null php 8, exception berupa expression jadi bisa langsung digunakan dalam contoh ternary operator");
    return "Hello, " . $nameChecker . PHP_EOL;
}


try {
    echo validatePhp7(null);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
try {
    echo validatePhp8(null);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
