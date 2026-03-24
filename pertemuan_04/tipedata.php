<?php

echo "Tipe data adalah ...";
echo "<br />";

// variabel
$nama = 200;

$nama_var = "Ini variabel ku"; // string
$namaVar = 2000; // integer
$NamaVar = true; // boolean

// String
echo "Ini adalah tipe data string petik ganda: $nama";
echo "<br />";
echo 'Ini adalah tipe data string petik tunggal $nama';
echo "<br />";
echo "200 - 200";
echo "<br />";
echo "1000";
echo "<br />";

// Integer
echo 1900 * 29;
echo "<br />";
echo 1900 / 29;
echo "<br />";

// Boolean
echo true;
echo "<br />";

// Float
echo 3.14;
echo "<br />";

// Array
// array index - punya value
echo "<pre>";
print_r(
    ["Apel", "Mangga", "Semangka"]
);
echo "</pre>";

// array asosiatif -punya key value
echo "<pre>";
print_r(
    [
        "nama" => "Salman",
        "usia" => 20
    ]
);
echo "</pre>";

// array multidimensi -punya key value
echo "<pre>";
print_r(
    [
        "nama" => "Salman",
        "usia" => 20,
        "berat_badan" => 60.53,
        "makanan_favorit" => ["Ayam Goreng", "Gacoan"]
    ]
);
echo "</pre>";

echo "<br />";

$jumlah = 2000000;
echo $jumlah;

echo "<br />";
echo "Uang Saya senilai $jumlah";

// Object