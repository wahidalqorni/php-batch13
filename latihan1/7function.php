<?php

    // function => kelompok script yg barupa intruksi2. membuat suatu fungsi yg akan dijalankan

    //1. function namafunction() {

    //  }

    //2. function namafunction($parameter) { paramter => suatu wadah yg menerima nilai. bisa bertipe apapun dan jg bisa lebih dari satu

    //  }

    function luasSegitiga($alas, $tinggi){
        // jalankan instruksi
        $luas = $alas * $tinggi / 2;

        return $luas;
    }

    function luasPersegiPanjang($panjang = 9, $lebar = 10){
        $luas = $panjang * $lebar;

        // agar hasil perhitunganny bisa dipake, maka kita return
        return $luas;
    }

    // pemanggilan function
    // namafunction() / namafunction(isiparameter(value))
    $luasSegitiga = luasSegitiga(7,3);

    $luasPersegiPanjang = luasPersegiPanjang();
    $luasPersegiPanjang2 = luasPersegiPanjang(8,7); // mengubah nilai default dari function luasPersegiPanjang

    echo "Luas Segitiga = $luasSegitiga";
    echo PHP_EOL;
    echo "Luas Persegi Panjang = $luasPersegiPanjang";
    echo PHP_EOL;
    echo "Luas Persegi Panjang 2 = $luasPersegiPanjang2";

?>