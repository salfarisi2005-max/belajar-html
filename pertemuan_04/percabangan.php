<?php

$operate = true;

if (!$operate) {
    echo "Saya bernilai benar";
    echo "<br />";
}

$nilai = "A";
$nilai2 = "B";
if (!(!($nilai == "A") && !($nilai2 == "B"))) {
    $hasil = "Eksekusi Atas";
} else {
    $hasil = "Eksekusi Bawah";
}
echo $hasil;
