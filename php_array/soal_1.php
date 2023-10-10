<?php
    function getBuah() {
        $buah = array("apel", "pisang", "jeruk");
        return $buah;
    }

        // Panggil fungsi dan simpan hasilnya dalam variabel
        $hasil = getBuah();

        // Mengambil data array dari variabel $buah, dan meletakanya pada hasil 
        foreach ($hasil as $buah) {
            echo $buah . "<br>";
        }
?>