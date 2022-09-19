<?php

// namespace App\Models;
require_once 'App/Models/App.php';

class Driver extends App
{

    // public function __construct()
    // {
    //     require_once 'App/config/Database.php';
    //     $this->app = new App();
    //     // include __DIR__.'/App/Config/Database.php';
    // }

    // menampilkan data
    public static function all()
    {

        $app = new App();

        $sql = "SELECT * FROM driverr ORDER BY Nama_driver ASC";

        $result = $app->query($sql);

        if ($result->num_rows < 1) {
            $hasil[] = [];
        } else {
            while ($data = $result->fetch_array()) {
                $hasil[] = $data;
            }
        }

        return $hasil;
    }

    // fungsi menampilkdan data berdasarkan id 
    public static function find($id)
    {

        $app = new App();

        $sql = "SELECT * FROM driverr WHERE Id_driver = '$id' ";

        // variabel utk hasil sqlnya
        $result = $app->query($sql);

        // $data = untuk menampung data dari fungsi query
        // bertipe array
        $data = $result->fetch_array();

        return $data;
    }

    // fungsi update data mahasiswa
    public static function create(array $data)
    {
        $app = new App();
        // data yg bakal diinputkan ke tabel
        // data ini dapat dari controller yg memanggil functoin create    
        $Nama_driver = $data['Nama_driver'];
        $Kota_driver = $data['Kota_driver'];
        $Pendapatan_Driver = $data['Pendapatan_Driver'];
        $Jumlah_oRder = $data['Jumlah_oRder'];

        $sql = "INSERT INTO driverr (Nama_driver, Kota_driver, Pendapatan_Driver, Jumlah_oRder ) VALUES ('$Nama_driver', '$Kota_driver', '$Pendapatan_Driver', '$Jumlah_oRder' ) ";
        // untuk mengeksekusi fungsi query dr mysql
        $result = $app->query($sql);

        return $result;
    }

    // fungsi update data mahasiswa
    public static function update(array $data)
    {
        $app = new App();

        $Id_driver = $data['Id_driver'];
        $Nama_driver = $data['Nama_driver'];
        $Kota_driver = $data['Kota_driver'];
        $Pendapatan_Driver = $data['Pendapatan_Driver'];
        $Jumlah_oRder = $data['Jumlah_oRder'];

        $sql = "UPDATE driverr SET Nama_driver = '$Nama_driver', Kota_driver = '$Kota_driver', Pendapatan_Driver = '$Pendapatan_Driver', Jumlah_oRder = '$Jumlah_oRder' WHERE Id_driver = '$Id_driver'  ";

        // untuk mengeksekusi fungsi query dr mysql
        $result = $app->query($sql);

        return $result;
    }

    // fungsi delete data
    public static function destroy($id)
    {
        $app = new App();

        $sql = " DELETE FROM driverr WHERE Id_driver = '$id'  ";

        $result = $app->query($sql);

        return $result;
    }
}
