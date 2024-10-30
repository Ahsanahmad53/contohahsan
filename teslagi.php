<?php
$harga_hewan = array(
    "Kucing"=> 5000,
    "Anjing"=> 7000,
    "Laba-laba"=> 3000,
);

function Cek_keberadaanHewan($nama_hewan) {
    global $harga_hewan;
    return array_key_exists($nama_hewan, $harga_hewan);
    }


function Total_harga_hewan($nama_hewan, $jumlah_hewan) {
    global $harga_hewan;
    return $harga_hewan[$nama_hewan] * $jumlah_hewan;
    }


if($_SERVER['REQUEST_METHOD']==='POST'){
    $nama_hewan = ($_POST['nama']);
    $jumlah_hewan = ($_POST['jumlah']);

    if(Cek_keberadaanHewan($nama_hewan)){
        $total = Total_harga_hewan($nama_hewan, $jumlah_hewan);
        echo "Total Belanjaan Anda: Rp". number_format($total, 0,); 
    }

    else {
        echo "Masukkan Kembali Inputan anda";
    }

}


