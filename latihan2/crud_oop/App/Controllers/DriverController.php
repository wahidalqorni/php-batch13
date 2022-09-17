<?php

    class DriverController {

        public function __construct()
        {
            include 'App/Models/Driver.php';
        }

        // function menampilkan data pertama kali
        public function index() 
        {
            // variabel yg menyimpan data
            $data = Driver::all();

            return $data;
        }

    }

?>