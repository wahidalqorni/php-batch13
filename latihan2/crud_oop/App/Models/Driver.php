<?php

include 'App/Models/App.php';

class Driver extends App
{

    // menampilkan data
    public static function all()
    {

        $app = new App();

        $sql = "SELECT * FROM driverr ORDER BY Nama_driver ASC ";

        $result = $app->query($sql); // hasilnya ini akan berbentuk array

        // jika datanya tidak ada, maka kasih kosongan
        if ($result->num_rows < 1) {
            $hasil[] = [];
        } else {
            // jika datanya ada, maka ambil datanya (fetch_array), ditampung di variabel $data dan isikan

            while ($data = $result->fetch_array()) {
                // ke variabel $hasil
                $hasil[] = $data;
            }
        }
        return $hasil;
    }

    // menampilkan detail data berdasarkan id yg dipilih
    public static function find($id)
    {

        $app = new App();

        $sql = "SELECT * FROM driverr WHERE Id_driver = '$id' ";

        $result = $app->query($sql); // hasilnya ini akan berbentuk array

        $hasil = $result->fetch_array();
        return $hasil;
    }

    public static function create(array $data)
    {

        $app = new App();

        // siapkan data yg akan diinput
        $Nama_driver = $data['Nama_driver'];
        $Kota_driver = $data['Kota_driver'];
        $Pendapatan_Driver = $data['Pendapatan_Driver'];
        $Jumlah_oRder = $data['Jumlah_oRder'];

        // sintaks sql utk insert data
        $sql = "INSERT INTO driverr (Nama_driver, Kota_driver, Pendapatan_Driver, Jumlah_oRder ) VALUES ('$Nama_driver', '$Kota_driver', '$Pendapatan_Driver', '$Jumlah_oRder'  ) ";

        // eksekusi querynya dgn memanggil fungsi query dari class App yg sudah dibuatkan objectnya ($app)
        $result = $app->query($sql);

        return $result;
    }

    public static function update(array $data)
    {

        $app = new App();

        // siapkan data yg akan diinput
        $Id_driver = $data['Id_driver'];
        $Nama_driver = $data['Nama_driver'];
        $Kota_driver = $data['Kota_driver'];
        $Pendapatan_Driver = $data['Pendapatan_Driver'];
        $Jumlah_oRder = $data['Jumlah_oRder'];

        // sintaks sql utk insert data
        $sql = "UPDATE driverr SET Nama_driver = '$Nama_driver', Kota_driver = '$Kota_driver', Pendapatan_Driver = '$Pendapatan_Driver', Jumlah_oRder = '$Jumlah_oRder' WHERE Id_driver = '$Id_driver' ";

        // eksekusi querynya dgn memanggil fungsi query dari class App yg sudah dibuatkan objectnya ($app)
        $result = $app->query($sql);

        return $result;
    }

    public static function destroy($id)
    {
        $app = new App();
        $sql = "DELETE FROM driverr WHERE Id_driver = '$id' ";
        $result = $app->query($sql);
        return $result;
    }

}
