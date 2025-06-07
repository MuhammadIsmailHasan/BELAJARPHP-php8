<?php

function validate(string $value)
{
    if (trim($value) == '') {
        throw new Exception("Value cannot be empty");
    }
}

try {
    validate("          ");
} catch (Exception $exception) { // pada php 7, variable $exception wajin ada, sedangkan pada php 8, variable $exception bisa dihilangkan
    echo "Invalid" . PHP_EOL;
}


/*
    Contohnya
    catch (Exception)
    {
        echo "Invalid" . PHP_EOL;
    }
*/
