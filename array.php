<?php

// ARRAY DIMENSI

// $nama = array("joni", "tejo", "budi", "rini", 100, 2.5);

// var_dump($nama);

// echo "<br>";

// echo $nama[3];

// echo "<br>";

// for ($i = 0; $i < 6; $i++) {
//     // echo $i;

//     echo $nama[$i] . "<br>";
// }

// foreach ($nama as $key) {
//     echo $key . '<br>';
// }

//ARRAY ASOSIATIF

// $nama = array(
//     "Joni" => "Surabaya",
//     "Budi" => "Malang",
//     "Rini" => "Sidoarjo",
//     "Lili" => "Jakarta"
// );

$nama["joni"] = "surabaya";
$nama["budi"] = "malang";
$nama["tejo"] = "jakarta";
$nama["siti"] = "sidoarjo";
$nama["sri"] = "maluku";

var_dump($nama);

echo "<br>";

// echo $nama['Joni'];

foreach ($nama as $key => $value) {
    echo $key . "=> " . $value;

    echo "<br>";
}
