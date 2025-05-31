<?php

trait SampleTrait
{
    public abstract function sampleMethod(string $name);
}


class SampleClass
{
    use SampleTrait;

    public function sampleMethod(int $name)
    {
        echo "Hello, " . $name . PHP_EOL;
    }
}

/* Contoh penggunaan trait dengan method yang di override
maka akan error : PHP Fatal error:  Declaration of SampleClass::sampleMethod(int $name) must be compatible with SampleTrait::sampleMethod(string $name)
dikarenakan argument dari method abstract tidak sama pada SampleClass dengan trait SampleTrait.
*/