<?php

/*
    Pada php 8, kita bisa menggunakan interface Stringable untuk mengubah objek menjadi string.
    Dimana kita bisa menggunakan magic function __toString() pada class yang mengimplementasikan interface Stringable.
    Sehingga kita bisa langsung menggunakan objek tersebut sebagai string.

    Semua class yang memiliki method __toString() secara otomatis dianggap mengimplementasikan Stringable, meskipun tidak menyebutkan implements Stringable
*/

// contoh php 7

class User implements Stringable
{
    public function __construct(public string $nama)
    {
        // menggunakan constructor property promotion, jadi tidak perlu $this->nama = nama
    }

    public function __toString(): string
    {
        return "Nama saya adalah " . $this->nama;
    }
}
$userPhp7 = new User("Budi Php 7");
echo $userPhp7 . PHP_EOL; // Akan error pada php 7, karena objek tidak bisa langsung diubah menjadi string  




// contoh php 8
function tampilkanUser(Stringable $user): void
{
    echo $user . PHP_EOL; // Akan berhasil pada php 8, karena objek bisa langsung diubah menjadi string
}

class Person
{
    public function __toString()
    {
        return "Ini ada function __toString() di class Person, dimana tidak menyebutkan implement Stringable, tapi tetap bisa digunakan sebagai string.";
    }
}

tampilkanUser(new User("Budi Php 8")); // memanggil class user yang mengimplementasikan Stringable
tampilkanUser(new Person()); // memanggil class person yang memiliki method __toString()