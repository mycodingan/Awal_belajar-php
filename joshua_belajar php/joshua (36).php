<?php

// Deklarasi anonymous function
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

// Memanggil anonymous function
$sayHello("Eko");
$sayHello("Budi");

// Definisi fungsi sayGoodBye yang menggunakan anonymous function sebagai argumen
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

// Memanggil sayGoodBye dengan anonymous function sebagai argumen
sayGoodBye("Eko", function (string $name): string {
    return strtoupper($name);
});

// Menggunakan anonymous function yang disimpan dalam variabel
$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Eko", $filterFunction);

// Menggunakan variabel di dalam anonymous function dengan 'use'
$firstName = "Eko";
$lastName = "Kurniawan";

$sayHelloEko = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloEko();

// Mengubah nilai variabel yang digunakan di dalam anonymous function
$firstName = "Budi";
$lastName = "Nugraha";
$sayHelloEko();
