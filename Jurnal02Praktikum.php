<?php

$harga_buah = array("Apel" => 10000, "Pisang" => 5000, "Mangga" => 15000);
$diskon = 0.20;

function cek_ketersediaan($nama_buah) {
    global $harga_buah;
    return array_key_exists($nama_buah, $harga_buah);
}

function hitung_total_harga($nama_buah, $jumlah, $diskon) {
    global $harga_buah;
    return $harga_buah[$nama_buah] * $jumlah * $diskon;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_buah = ($_POST['nama_buah']);
    $jumlah = ($_POST['jumlah']);


    if (cek_ketersediaan($nama_buah)) {
        $total_harga = hitung_total_harga($nama_buah, $jumlah, $diskon);
        echo "Total harga: Rp " . number_format($total_harga, 0, ".", ",");
    } else {
        echo "Maaf, buah tidak tersedia.";
    }
}
?>
