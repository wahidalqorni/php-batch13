<?php
    // gabungkan file yg ingin dipakai
    include '3property.php';

    // buat object agar class Mobil yg ada di file 3property.php bisa dipakai
    $mobil1 = new Mobil();
    $mobil2 = new Mobil();

    // setelah membuat object dari class, maka kita bisa memanggil apa2 yg ad di class tersebut
    echo "Roda Awal : $mobil1->roda ";

    // ganti nilai pada property roda
    $mobil1->roda = 6;

    $mobil1->warna = "Black";
    PHP_EOL;
    echo $mobil1->warna;
    echo "Roda setelah diubah nilainya $mobil1->roda <br>";
    $mobil1->jalan();
    $mobil2->nos();
   

?>