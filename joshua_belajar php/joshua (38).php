<?php

$firstName = "Eko";
$lastName = "Kurniawan";

$anonymousFunction = function () use ($firstName, $lastName) : string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction(); // Output: Hello Eko Kurniawan
echo $arrowFunction(); // Output: Hello Eko Kurniawan
