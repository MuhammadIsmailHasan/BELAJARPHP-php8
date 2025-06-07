<?php

/*
    Pada php 7, jika kita ingin ingin mendapatkan nama class menggunakan NamaClass::class (jika kita tahu nama classnya),
    atau get_class($objek) (jika kita hanya tahu objeknya), dan kita mengambil nama class dengan $objeknya


    Pada php 8, kita bisa menggunakan class on object, yakni dengan menggunakan $objek::class.
    Dimana kita bisa langsung menggunakan ::class pada objeknya, tanpa harus mengetahui nama classnya.

*/

class User
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}

$iniObjectUser = new User("John");
var_dump($iniObjectUser::class); // Ini hanya ada di php 8
var_dump((get_class($iniObjectUser))); // Ini ada di php 7 dan php 8
var_dump(User::class); // Ini ada di php 7 dan php 8