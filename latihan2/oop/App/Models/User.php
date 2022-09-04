<?php
    // unutk memberikan identitas pd class yg mempunyai nama sama
    namespace App\Models;

    class User {

        // method menampilkan data user
        public static function getData(){
            
            $data = [
                "name" => "Mahasiswa Satu",
                "nim" => "1354999",
                "email" => "msatu@gmail.com"
            ];

            return $data;

        }

    }
