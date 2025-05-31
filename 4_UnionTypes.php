<?php

/*    Union Types adalah fitur baru di PHP 8 yang memungkinkan kita untuk mendeklarasikan tipe data yang bisa menerima beberapa tipe data sekaligus.
    Dengan fitur ini, kita bisa membuat kode lebih fleksibel dan mudah dibaca.
*/

# Contoh penggunaan Union Types pada property
class Example
{
    public string | int | bool $value;
}
$example = new Example();
$example->value = "Hello"; // string
$example->value = 123; // int
$example->value = true; // bool
var_dump($example->value); // Output: bool(true)


# Contoh penggunaan Union Types pada parameter function
function sampleFunction(string | int | array $value)
{
    if (is_string($value)) {
        echo "Value is a string: $value" . PHP_EOL;
    } elseif (is_int($value)) {
        echo "Value is an integer: $value" . PHP_EOL;
    } elseif (is_array($value)) {
        echo "Value is an array: " . implode(", ", $value) . PHP_EOL;
    }
}
sampleFunction("Hello"); // Output: Value is a string: Hello
sampleFunction(123); // Output: Value is an integer: 123
sampleFunction([1, 2, 3]); // Output: Value is an array: 1, 2, 3


function sampleReturnFunction(string|array $value): string|array
{
    if (is_string($value)) {
        return "Returned string: $value";
    } elseif (is_array($value)) {
        return ["Returned array", ...$value];
    }

    return "Invalid type"; // Optional fallback for unexpected types
}
var_dump(sampleReturnFunction("Hello")); // Output: string(20) "Returned string: Hello"
var_dump(sampleReturnFunction([1, 2, 3])); // Output: array(2) { [0]=> string(17) "Returned array" [1]=> int(1) [2]=> int(2) [3]=> int(3) }
var_dump(sampleReturnFunction(123));
