<?php

$nilai = "A";
switch ($nilai) {
    case "A":
        echo "Nilai Anda A";
        break;
    case "B":
        echo "Nilai Anda B";
        break;
    case "C":
        echo "Nilai Anda C";
        break;
    case "D":
        echo "Nilai Anda D";
        break;
    default:
        echo "Nilai Tidak Dikenal";
}
echo $nilai . PHP_EOL;


// Contoh penggunaan match expression
/*  
    Match expression adalah fitur baru di PHP 8 yang mirip dengan switch statement, tetapi lebih ringkas dan fleksibel.
    Seperti ternary operator pada if
    Match expression mengembalikan nilai, sehingga kita bisa langsung menggunakan hasilnya.
    Match expression juga mendukung tipe data yang lebih kompleks, seperti array dan objek.

    Match expression tidak bisa digunakan seperti function atau operasi kompleks menggunakan kurung {}
*/
$hasil = match ($nilai) {
    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Remedial",
    default => "Anda Tidak Lulus",
};
echo $hasil . PHP_EOL;


// Contoh penggunaan dengan equality operator
/*
    Match expression juga bisa digunakan dengan operator perbandingan, seperti >=, <=, >, <, ==, !=, dan lain-lain.
    Ini membuat match expression lebih fleksibel dibandingkan switch statement.

    Penggunaannya adalah mirip dengan if statement, tetapi lebih ringkas. Dimana hasil dari pengecekan bernilai boolean
*/
$nilaiKedua = 65;
$hasilKedua = match (true) {
    $nilaiKedua >= 90 => "Nilai Anda A",
    $nilaiKedua >= 80 => "Nilai Anda B",
    $nilaiKedua >= 70 => "Nilai Anda C",
    $nilaiKedua >= 60 => "Nilai Anda D",
    default => "Nilai Tidak Dikenal",
};
echo $hasilKedua . PHP_EOL;

// Contoh dengan function
$name = "Mr. John Doe";
$sapaan = match (true) {
    str_contains($name, "Mr.") => "Selamat Pagi Tuan",
    stra_contains($name, "Mrs.") => "Selamat Pagi Nyonya",
    default => "Selamat Pagi",
};

echo $sapaan . PHP_EOL;
