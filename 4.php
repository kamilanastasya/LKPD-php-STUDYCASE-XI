<?php
$angka = isset($_POST ['angka 1']) ? $_POST['angka'] : 0;
$hasil = "";

function prima($a) {
    if ($a <= 1) return false;
    for ($i = 2; $i <= sqrt($a); $i++) {
        if ($a % $i == 0) return false;
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (is_numeric($angka)) {
        if (prima($angka)) {
            $hasil = "$angka adalah bilangan prima";
        } else {
            $hasil = "$angka bukan bilangan prima";
        }
    } else {
        $hasil = "harap masukkan angka yang valid";
    }
}
?>