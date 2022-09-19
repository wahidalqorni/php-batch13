<?php
require_once 'App/Controllers/DriverController.php';
// siapkan id yg didapatkan dari saat kita klik tombol edit di tampilan tabel driver

$id = $_GET['Id_driver'];
// realisasikan class DriverController
$driver = new DriverController();

$data = $driver->edit($id);

// fungsi update data ke database
if (isset($_POST['proses'])) {
    // /data yg akan dikirim ke fungsi update yg ada di controller mahasiswa
    $data = array(
        'Id_driver' => $_POST['Id_driver'],
        'Nama_driver' => $_POST['Nama_driver'],
        'Kota_driver' => $_POST['Kota_driver'],
        'Pendapatan_Driver' => $_POST['Pendapatan_Driver'],
        'Jumlah_oRder' => $_POST['Jumlah_oRder']
    );

    // panggil fungsi update beserta parameternya
    $driver->update($data);
}
?>

<form method="post">
    <input type="hidden" name="Id_driver" value="<?php echo $data['Id_driver'] ?>">

    <div class="mb-3">
        <label for="Nama_driver" class="form-label">Nama</label>
        <input type="text" class="form-control" id="Nama_driver" name="Nama_driver" value="<?= $data['Nama_driver'] ?>">
    </div>
    <div class="mb-3">
        <label for="Kota_driver" class="form-label">Kota Driver</label>
        <input type="text" class="form-control" id="Kota_driver" name="Kota_driver" value="<?= $data['Kota_driver'] ?>">
    </div>
    <div class="mb-3">
        <label for="Pendapatan_Driver" class="form-label">Pendapatan</label>
        <input type="text" class="form-control" id="Pendapatan_Driver" name="Pendapatan_Driver" value="<?= $data['Pendapatan_Driver'] ?>">
    </div>
    <div class="mb-3">
        <label for="Jumlah_oRder" class="form-label">Jumlah Order</label>
        <input type="text" class="form-control" id="Jumlah_oRder" name="Jumlah_oRder" value="<?= $data['Jumlah_oRder'] ?>">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary" name="proses">Submit</button>
</form>