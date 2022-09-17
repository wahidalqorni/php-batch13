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
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Pendapatan</th>
        </tr>
        <?php
            $no = 1;
            foreach($data as $dt) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $dt['Nama_driver'] ?></td>
            <td><?= $dt['Kota_driver'] ?></td>
            <td><?= $dt['Pendapatan_Driver'] ?></td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
</div>