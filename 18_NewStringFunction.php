<?php
/*
    Pada php 8, terdapat 3 function baru yang bisa kita gunakan untuk memanipulasi string, yakni:
    1. str_contains() : untuk mengecek apakah sebuah string mengandung substring tertentu.
    2. str_starts_with() : untuk mengecek apakah sebuah string diawali dengan substring tertentu.
    3. str_ends_with() : untuk mengecek apakah sebuah string diakhiri dengan substring tertentu.

*/

var_dump(str_contains("Hello World", "World")); // Output: bool(true)
var_dump(str_starts_with("Hello World", "Hello")); // Output: bool(true)
var_dump(str_ends_with("Hello World", "World")); // Output: bool(true)