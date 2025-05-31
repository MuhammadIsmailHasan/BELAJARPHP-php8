<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

/*
    Nullsafe operator adalah fitur baru di PHP 8 yang memungkinkan kita untuk mengakses properti atau method dari objek yang mungkin null tanpa harus melakukan pengecekan null secara manual.
    Ini membuat kode lebih ringkas dan mudah dibaca.
    Nullsafe operator menggunakan tanda tanya (?) sebelum operator akses (->).
    Jika objeknya null, maka hasilnya juga akan null, tanpa menghasilkan error.
*/

// Contoh pengecekan null pada PHP 7.4
function getCountryPhp7(?User $user): ?string
{
    if ($user != null) {
        if ($user->address != null) {
            if ($user->address->country != null) {
                return $user->address->country;
            }
        }
    }

    return null;
}

// Contoh pengecekan null pada PHP 8.0 menggunakan nullsafe operator
function getCountryPhp8(?user $user): ?string
{
    return $user?->address?->country;
}


echo "Pada php 7.4 : " . getCountryPhp7(null) . PHP_EOL;

echo "Pada php 8.0 : " . getCountryPhp8(null) . PHP_EOL;
