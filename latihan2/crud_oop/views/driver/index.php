<?php
    include 'App/Controllers/DriverController.php';

    // buat object dari class Driver
    $driver = new DriverController();

    // buat variabel yg isinya itu adalah mengambil hasil dari function index() yg ada di DriverController
    $data = $driver->index();
    // var_dump($data);
?>
<h1>Halaman Driver</h1>

<div class="row">
    <a href="index.php?page=driver&action=add" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Pendapatan</th>
            <th>Jumlah Order</th>
            <th>Action</th>
        </tr>
        <?php
            $no = 1;
            foreach($data as $dt) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $dt['Nama_driver'] ?></td>
            <td><?= $dt['Kota_driver'] ?></td>
            <td>Rp. <?= number_format($dt['Pendapatan_Driver']) ?></td>
            <td><?= $dt['Jumlah_oRder'] ?></td>
            <td>
                <a href="index.php?page=driver&action=edit&Id_driver=<?= $dt['Id_driver'] ?>" class="btn btn-success">Edit</a>
                
                <a href="index.php?page=driver&action=delete&Id_driver=<?= $dt['Id_driver'] ?>" onclick="return confirm('Yakin hapus data?')" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
</div>