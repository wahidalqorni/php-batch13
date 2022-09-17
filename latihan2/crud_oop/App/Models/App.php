<?php
    // class ini difungsikan untuk memanggil koneksi database
    class App {

        // panggil file Config/Database.php

        // fungsi yg pertama kali dieksekusi saat class ini dipanggil
        public function __construct()
        {
            include 'App/Config/Database.php';
        }

        protected function query($query) {

            // membuat object dari class Database
            $db = new Database();

            // panggil function koneksi() yg ada di class Database
            // tarok di dlm variabel $mysqli
            $mysqli = $db->koneksi();

            // hasil dari query.an
            $result = $mysqli->query($query);
            
            return $result;
        }

    }

?>