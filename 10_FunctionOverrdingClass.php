<?php

class SampleClass
{
    public function sampleMethod(string $name)
    {
        echo "Hello, " . $name . PHP_EOL;
    }
}


class SampleClassOverride extends SampleClass
{
    // public function sampleMethod(int $name) {}
}

/*
    Pada php 8.0, kita tidak bisa mengoverride method dari class parent dengan tipe data yang berbeda pada parameter.
    Dan akan muncul pesan error seperti di ini :
    PHP Fatal error:  Declaration of SampleClassOverride::sampleMethod(int $name) must be compatible with SampleClass::sampleMethod(string $name)
*/