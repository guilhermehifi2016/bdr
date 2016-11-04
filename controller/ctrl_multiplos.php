<?php
require_once 'vendor/autoload.php';

function multiplo($i = 1)
{

    for ($i = 1; $i <= 100; $i++) {

        if (($i % 3 == 0) and ( $i % 5 == 0)) {
            echo "FizzBuzz</br>";
        } elseif ($i % 5 == 0) {
            echo "Buzz</br>";
        } elseif ($i % 3 == 0) {
            echo "Fizz</br>";
        } else {
            echo $i;
        }
    }
}
$escrever = multiplo();

echo $escrever;
