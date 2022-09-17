<?php

    class Database {
        // buat parameter yg dibutuhkan untuk koneksi ke mysql
        private $dbHost = 'localhost';
        private $dbUser = 'root';
        private $dbPassword = '';
        private $dbName = 'crud_oop';

        // buat fungsi untuk koneksi ke database mysql
        public function koneksi() {

            $mysqli = new mysqli(
                $this->dbHost,
                $this->dbUser,
                $this->dbPassword,
                $this->dbName
            );

            if($mysqli->connect_error) {
                echo 'Gagal koneksi ('.$mysqli->connect_error.') ';
            }

            return $mysqli;

        } 
        
    }

?>