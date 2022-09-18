<?php

class DriverController
{

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

    // function insert data ke tabel database
    public function insert(array $inputan) // inputan akan didapat dari form yg memanggil function ini
    {
        // panggil function create yg ada di Driver model
        $insertData = Driver::create(
            [
                'Nama_driver' => $inputan['Nama_driver'],
                'Kota_driver' => $inputan['Kota_driver'],
                'Pendapatan_Driver' => $inputan['Pendapatan_Driver'],
                'Jumlah_oRder' => $inputan['Jumlah_oRder'],
            ]
        );

        if ($insertData == TRUE) {
            // redirect ke page driver
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            // redirect ke page driver dan actionnya add
            echo "<script> window.location.href = '?page=driver&action=add'; </script>";
        }
    }

    // menampilkan data yg dipilih berdasarkan id
    public function edit($id)
    {
        $data = Driver::find($id);
        return $data;
    }

    // update data
    public function update(array $inputan) // inputan akan didapat dari form yg memanggil function ini
    {
        // panggil function create yg ada di Driver model
        $updateData = Driver::update(
            [
                'Id_driver' => $inputan['Id_driver'],
                'Nama_driver' => $inputan['Nama_driver'],
                'Kota_driver' => $inputan['Kota_driver'],
                'Pendapatan_Driver' => $inputan['Pendapatan_Driver'],
                'Jumlah_oRder' => $inputan['Jumlah_oRder'],
            ]
        );

        if ($updateData == TRUE) {
            // redirect ke page driver
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            // redirect ke page driver dan actionnya add
            echo "<script> window.location.href = '?page=driver&action=edit'; </script>";
        }
    }

    public function delete($id)
    {
        $deleteData = Driver::destroy($id);

        if ($deleteData == TRUE) {
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            echo "<script> window.location.href = '?page=driver'; </script>";
        }
    }
}
