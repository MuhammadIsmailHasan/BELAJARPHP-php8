<?php

class Manager
{
    private function devisi(string $name): string
    {
        return "Devisi " . $name;
    }
}

class Supervisor extends Manager
{
    public function devisi(string $anggota): array
    {
        return [];
    }
}

/*
    Pada php 7, ketika child class membuat method dengan nama yang sam dengan parent class, maka hal tersebut dianggap mengoverride method parent class meskipun method parent class bersifat private. 
    Pada php 8, ketika kita melakukan hal yang sama, maka method di child class di anggap sebagai method baru yang tidak mengoverride method parent class.
*/
