<?php

    include 'App/Models/App.php';

    class Driver extends App {

        // menampilkan data
        public static function all(){

            $app = new App();

            $sql = "SELECT * FROM driverr ORDER BY Nama_driver ASC ";
            
            $result = $app->query($sql); // hasilnya ini akan berbentuk array

            // jika datanya tidak ada, maka kasih kosongan
            if($result->num_rows < 1 ) {
                $hasil[] = [];
            } else {
                // jika datanya ada, maka ambil datanya (fetch_array), ditampung di variabel $data dan isikan
                
                while($data = $result->fetch_array() ) {
                    // ke variabel $hasil
                    $hasil[] = $data;
                }
            }
            return $hasil;
        }

    }

?>