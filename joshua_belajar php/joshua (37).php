<?php

// Array data
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Menggunakan array_map dan anonymous function
$dataResult = array_map(fn(int $value) => $value * 10, $data);
var_dump($dataResult);

// Mengurutkan array secara descending menggunakan rsort
rsort($data);
var_dump($data);

// Mengambil kunci (key) dari array menggunakan array_keys
var_dump(array_keys($data));

// Mengambil nilai (value) dari array menggunakan array_values
var_dump(array_values($data));

// Array asosiatif (associative array)
$person = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

// Mengambil kunci (key) dari array asosiatif menggunakan array_keys
var_dump(array_keys($person));

// Mengambil nilai (value) dari array asosiatif menggunakan array_values
var_dump(array_values($person));
