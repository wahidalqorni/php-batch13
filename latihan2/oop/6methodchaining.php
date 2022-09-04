<?php

    class StringWord {

        private $word;

        // constructor => sebuah method yg akan dijalankan pertama kali saat class dipanggil
        public function __construct($wordInputan){

            // merubah nilai dari properti $word yg tadinya kosong menjadi nilai $wordInputan
            $this->word = $wordInputan;

        }

        public function bold(){
            // ubah nilai dari $word dengan nilai yg baru (diformat underline)
            $this->word = sprintf('<b>%s</b>', $this->word );

            return $this;
        }

        public function underline(){
            // ubah nilai dari $word dengan nilai yg baru (diformat underline)
            $this->word = sprintf('<u>%s</u>', $this->word );

            return $this;
        }

        public function italic(){
            $this->word = sprintf('<i>%s</i>', $this->word );

            return $this;
        }

        // konvert class StringWord outputnya menjadi String
        public function __toString()
        {
            return $this->word;
        }
    }
    
    // peman
    $obj = new StringWord('Ini menggunakan object Tebal n Italic ');
    echo $obj->bold()->italic();
    echo "<br>";
    echo (new StringWord('Tanpa Ambil funtion'));
    echo "<br>";
    echo (new StringWord('Tebal'))->bold();
    echo "<br>";
    echo (new StringWord('Tebal & Miring'))->bold()->italic();
    echo "<br>";
    echo (new StringWord('Tebal, Miring & Garis Bawah'))->bold()->italic()->underline();

?>