<?php

function namaLengkap(string $depan, string $tengah, string $belakang): string
{
    return $depan . " " . $tengah . " " . $belakang;
}

echo namaLengkap("Budi", "Santoso", "Sutrisno",) . PHP_EOL;
/* 
    Tidak akan error, karena PHP 8.0 mendukung parameter list yang dipisahkan dengan koma pada akhir parameter.
    Hal ini akan error jika dilakukan pada PHP 7.4, karena pada versi tersebut tidak mendukung penambahan koma di akhir parameter list.
    SIMPLE TAPI BERMANFAAT    
*/

$contohArray = [
    "Budi",
    "Santoso",
    "Gunawan",
];
echo namaLengkap(...$contohArray) . PHP_EOL;
// Berlaku juga pada array, kita bisa menggunakan spread operator (...) untuk mengirimkan array sebagai parameter list.
