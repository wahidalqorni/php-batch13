<?php
    include '4statis.php';

    // panggil nama class ::$varaiabel atau function()
    // untuk merealisasikan static, tidak perlu membuatkan object terlebih dahulu
    $kakiSinga = Singa::$kaki;
    $lariSinga = Singa::lari();

    echo "Kaki Singa : " . $kakiSinga;
    echo PHP_EOL;
    $kakiSinga = 6;
    echo "Ubah nilai kaki singa : $kakiSinga ";
    echo PHP_EOL;
    echo "Ambil function lari() : $lariSinga";
?>