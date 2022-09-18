<?php

include 'App/Controllers/DriverController.php';

$driver = new DriverController();

if(isset($_POST['proses'])) {
    // buat variabel utk menampung isi inputan
    $data = [
        'Nama_driver' => $_POST['Nama_driver'],
        'Kota_driver' => $_POST['Kota_driver'],
        'Pendapatan_Driver' => $_POST['Pendapatan_Driver'],
        'Jumlah_oRder' => $_POST['Jumlah_oRder']
    ];

    // panggil fungsi insert yg ada di DriverController
    $driver->insert($data);
}

?>
<form action="" method="post">
    <div class="mb-3">
        <label for="Nama_driver" class="form-label">Nama Driver</label>
        <input type="text" class="form-control" id="Nama_driver" name="Nama_driver" placeholder="Masukkan Nama Driver" value="<?= @$_POST['Nama_driver'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="Kota_driver" class="form-label">Kota Driver</label>
        <input type="text" class="form-control" id="Kota_driver" name="Kota_driver" placeholder="Masukkan Kota Driver" value="<?= @$_POST['Kota_driver'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="Pendapatan_Driver" class="form-label">Pendapatan Driver</label>
        <input type="number" class="form-control" id="Pendapatan_Driver" name="Pendapatan_Driver" placeholder="Masukkan Pendapatan Driver" value="<?= @$_POST['Pendapatan_Driver'] ?>" required>
    </div>

    <div class="mb-3">
        <label for="Jumlah_oRder" class="form-label">Jumlah Order Driver</label>
        <input type="number" class="form-control" id="Jumlah_oRder" name="Jumlah_oRder" placeholder="Masukkan Jumlah Order Driver" value="<?= @$_POST['Jumlah_oRder'] ?>" required>
    </div>

    <button name="proses" class="btn btn-primary">Submit</button>
</form>