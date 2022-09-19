<?php

class DriverController {

    public function __construct()
    {
        require_once 'App/Models/Driver.php';
        // include __DIR__.'/App/Models/Driver.php';
    }

    public function index()
    {
        $data = Driver::all();

        return $data;
    }

    public function edit($id)
    {
        $data = Driver::find($id);

        return $data;
    }

    public function insert(array $inputan)
    {
        // data ini isinya dapat dari form add
        $insertData = Driver::create([
            'Nama_driver' => $inputan['Nama_driver'],
            'Kota_driver' => $inputan['Kota_driver'],
            'Pendapatan_Driver' => $inputan['Pendapatan_Driver'],
            'Jumlah_oRder' => $inputan['Jumlah_oRder']
        ]);
        
        if($insertData == TRUE) {
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            echo "<script> window.location.href = '?page=driver&action=add'; </script>";
        }
    }

    public function update(array $inputan)
    {
 
        $updateData = Driver::update([
            'Id_driver' => $inputan['Id_driver'],
            'Nama_driver' => $inputan['Nama_driver'],
            'Kota_driver' => $inputan['Kota_driver'],
            'Pendapatan_Driver' => $inputan['Pendapatan_Driver'],
            'Jumlah_oRder' => $inputan['Jumlah_oRder']
        ]);

        if($updateData == TRUE) {
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            echo "<script> window.location.href = '?page=driver&action=edit'; </script>";
        }
    }

    public function delete($id)
    {
        $deleteData = Driver::destroy($id);

        if($deleteData == TRUE) {
            echo "<script> window.location.href = '?page=driver'; </script>";
        } else {
            echo "<script> window.location.href = '?page=driver'; </script>";
        }
    }
}

?>