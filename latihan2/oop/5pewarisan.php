<?php

    class Hewan {
        // property
        private $jenis;

        // method
        public function inisial(){
            return "Ini adalah Hewan ...";
        }

        public function hello(){
            echo "Hellow";
        }

        // setter => utk mengeset suatu nilai yg ada pd suatu method
        public function setJenis($inputanJenis) {
            // setter akan mengeset suatu nilai yg diterima
            // dlm kasus ini, akan merubah nilai dari variabel $jenis
            // validasi
            if(!is_string($inputanJenis)) {
                throw new Exception('Inputan harus String!');
            }
            $this->jenis = $inputanJenis;
        }

        // untuk memanggil nilai yg sudah di atur oleh setJenis
        public function getJenis() {
            return $this->jenis;
        }
    }

    class Kambing extends Hewan {

        public function suara() {
            return "MBeeekkk";
        }

        public function jenis_kelamin($inputanJenisKelamin){
            return $inputanJenisKelamin;
        }
    }

    // nested
    class Sapi extends Kambing {

        private $kambings;
        
        // merealisasikan suatu class di dalam class
        public function realisasikanKambing() {
            $this->kambings = new Kambing();

            return $this->kambings;
        }
        
        public function getClassKambing(){
            $data = $this->realisasikanKambing();
            return $data->suara();
        }


    }

    // realisasikan class kambing
    $kambing = new Kambing();
    // panggil function inisial
    echo "Ini pemanggilan method inisial : " . $kambing->inisial();
    echo PHP_EOL;
    echo "Ini pemanggilan method hello : " . $kambing->hello();
    // setter
    $kambing->setJenis("Herbivora");
    echo PHP_EOL;
    echo "Hasil dari SETTER adalah : " . $kambing->getJenis();
    // sapi
    $sapi = new Sapi();
    echo PHP_EOL;
    echo "Jenis Kelamin Sapi : " . $sapi->jenis_kelamin("Jantan");
    echo PHP_EOL;
    echo $sapi->getClassKambing();






?>