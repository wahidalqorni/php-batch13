<?php
    // unutk memberikan identitas pd class yg mempunyai nama sama
    namespace App;

    Class User {
        // method menampilkan data user
        public static function getData(){
            
            $data = [
                "name" => "Mahasiswa Satu",
                "nim" => "1354999"
            ];

            return $data;

        }
    }

?>