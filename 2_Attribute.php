<?php
/*
    Attibute adalah fitur baru di PHP 8 yang memungkinkan kita untuk menambahkan metadata pada class, method, atau property

    Bisa ditambahkan Attribute Target, maka attrubte akan jalan sesuai dengan target yang ditentukan
    Contoh:
    #[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_PROPERTY)]
    
    Attribute::TARGET_CLASS untuk class
    Attribute::TARGET_PROPERTY untuk property
*/

#[Attribute]
class NotBlank
{
    // ini adalah attribute class
}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequeest
{
    #[NotBlank]
    #[Length(min: 5, max: 20)] // Contoh penggunaan attribute dengan parameter (constructor)
    public string $username;

    #[NotBlank]
    public string $password;

    #[NotBlank]
    public ?string $devisi;

    #[Blank]
    public string $status;
}

function validate(object $object): void
{
    $reflectionClass = new ReflectionClass($object);
    $getProperties = $reflectionClass->getProperties();
    foreach ($getProperties as $property) {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property {$property->getName()} belum di inisialisasi");
        }
        if ($property->getValue($object) == null) {
            throw new Exception("Property {$property->getName()} masih kosong");
        }
    }
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized(($object)) || $property->getValue($object) == null) {
        return; // jika property belum di inisialisasi atau null, tidak perlu validasi panjang
    }

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);
    foreach ($attributes as $attribute) {
        $lengthInstance = $attribute->newInstance(); // mengambil object dari attribute Length
        if (strlen($value) < $lengthInstance->min) {
            throw new Exception("Property {$property->getName()} harus memiliki panjang minimal {$lengthInstance->min}");
        }
        if (strlen($value) > $lengthInstance->max) {
            throw new Exception("Property {$property->getName()} harus memiliki panjang maksimal {$lengthInstance->max}");
        }
    }
}

# Jika salah satu property yang punya attribute NotBlank tidak diisi, maka akan throw exception
try {
    $loginUser = new LoginRequeest();
    $loginUser->username = "john";
    $loginUser->password = "secret";
    $loginUser->devisi = "IT Department";
    // $loginUser->devisi = null; // ini akan throw exception karena NotBlank
    validate($loginUser);
} catch (\Throwable $th) {
    echo "Maaf error, {$th->getMessage()}" . PHP_EOL;
}
