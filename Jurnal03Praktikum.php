<?php

$Buku = array(
    ["id" => 1, "Judul" => "Berserk", "Penulis" => "Miura Kentaro"],
    ["id" => 2, "Judul" => "Oswald", "Penulis" => "Walt Disney"]
);

function Tampilkan_namaBuku($Buku) {
    if (count($Buku) > 0) {
        echo "<table border='1' cellspacing='0' cellpadding='10'>";
        echo "<thead>
                <tr>
                    <th><b>Judul</b></th>
                    <th><b>Penulis</b></th>
                </tr>
            </thead>
            <tbody>";
        
        foreach ($Buku as $buku) {
            echo "<tr>
                    <td>" . $buku['Judul'] . "</td>
                    <td>" . $buku['Penulis'] . "</td>
                </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "Tidak Ada Data Buku";
    }
    echo "<br>";
}

function Tampilkan_namaBukuAwal($Buku) {
    if (count($Buku) > 0) {
        echo "<table border='1' cellspacing='0' cellpadding='10'>";
        echo "<strong>Menampilkan Data Awal</strong>.<br>";
        echo "<thead>
                <tr>
                    <th><b>Judul</b></th>
                    <th><b>Penulis</b></th>
                </tr>
            </thead>
            <tbody>";
        
        foreach ($Buku as $buku) {
            echo "<tr>
                    <td>" . $buku['Judul'] . "</td>
                    <td>" . $buku['Penulis'] . "</td>
                </tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "Tidak Ada Data Buku";
    }
    echo "<br>";
}

Tampilkan_namaBukuAwal($Buku);

function insert(&$Buku, $judul, $penulis) {
    $id = end($Buku)['id'] + 1;  
    $Buku[] = [
        "id" => $id,
        "Judul" => $judul,
        "Penulis" => $penulis,
    ];
    echo "<strong>Menampilkan Data Tambah</strong>.<br>";
    echo "Buku berhasil ditambahkan.<br>";
}

insert($Buku, "Tenggelamnya Kapal Van Der Wijk", "Buya Hamka");
Tampilkan_namaBuku($Buku); // Menampilkan data setelah penambahan

insert($Buku, "Resep Kuliner Mas Aziz", "Aziz Hehe");
Tampilkan_namaBuku($Buku); // Menampilkan data setelah penambahan

function Hapus_DataBuku(&$Buku, $id) {
    foreach ($Buku as $key => $buku) {
        if ($buku['id'] == $id) {
            unset($Buku[$key]);
            echo "<strong>Menampilkan Data Hapus</strong>.<br>";
            echo "Buku dengan ID $id berhasil dihapus.<br>";
            return;
        }
    }

    echo "Buku dengan ID $id tidak ditemukan.<br>";
}

Hapus_DataBuku($Buku, 4);
Tampilkan_namaBuku($Buku); // Menampilkan data setelah penghapusan

?>