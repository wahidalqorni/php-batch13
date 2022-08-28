<?php
    include '3property.php';

    // buatkan object dari class Mobil
    $mobilA = new Mobil();

    // mengakses property bersifat private 
    // echo $mobilA->knalpot;

    // echo "Ambil Method terbang : " . $mobilA->terbang();
    echo "Ambil Method terbang : " . $mobilA->ambilnilaiknalpot();
    echo PHP_EOL;
    echo "Ambil method jalan : " . $mobilA->jalan();


?>>