<?php
     // pembuatan class
     class Mobil {

        // properties

        // visibility
        // public => file yg lain dapat mengakses properti dan function yg bersifat public
        public $roda = 4;
        public $warna = "";

        // private => hanya bisa diakses oleh class itu sendiri
        private $knalpot = "racing";
        
        public function ambilnilaiknalpot(){
            // $this utk memanggil apa2 yg ada pada classnya sendiri
            return $this->knalpot;
        }

        public function terbang(){
            return "Terbannggg";
        }

        // method
        public function jalan(){
            echo "Mobil Berjalan ke depan";
        }

        public function mundur(){
            echo "Mobil bergerak mundur";
        }

        public function nos(){
            echo "Wuuussssssss";
        }
    }

    // agar class Mobil bisa dipakai, maka perlu kita buatkan object dari class tersebut
    // variabel yg merujuk ke class yg dituju
    $crv = new Mobil();

?>