<?php

    // fungsi untuk menerima inputan dari form
    function getInputan(array $inputanDariForm){

        // isinya adalah mengembalikan/return apa yg diinputkan dari form

        // buat variabel untuk menyimpan inputan dari form
        $data = [
            //       ini adalah inputan dari form yang memanggil function ini. sesuaikan dengan atribut name pd masing2 input yg ada di form 
            'nim' => $inputanDariForm['nim'],
            'nama' => $inputanDariForm['nama'],
            'jenis_kelamin' => $inputanDariForm['jenis_kelamin']
        ];

        // kembalikan nilainya
        return $data;
    }

    // function menghitung luas persegi panjang
    function luasPersegiPanjang($panjang, $lebar){
        
        // buat variabel untuk proses luas
        $luas = $panjang * $lebar;

        // kembalikan nilainya
        return $luas;

    }

?>