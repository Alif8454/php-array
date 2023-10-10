<?php
$siswa = [
    "Nama" => ["Adi", "Ira", "Amin"],
    "Alamat" => ["Jakarta", "Bekasi", "Priok"]
];

// Menampilkan Array
var_dump($siswa);

// Menampilkan isi array secara keseluruhan
foreach ($siswa as $key => $value) {
    foreach ($value as $val) {
        echo "$key: $val<br>";
    }
}
?>
