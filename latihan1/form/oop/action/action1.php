<?php
// file ini utk action dari form yg menggunakannya

// masukkan file function.php ke file ini
// untuk memanggil function2 yg ada di file function.php
include '../class/Mahasiswa.php';

// variabel yang berisi inputan dari form inputan sebelumnya
$inputan = [
    //       dapatkan/menerima isi dari inputan. ambil berdasarkan method form dan atribut name dari inputan masing2
    'nim' => $_POST['nim'],
    'nama' => $_POST['nama'],
    'jenis_kelamin' => $_POST['jenis_kelamin']
];

// buat object untuk merealisasikan class Mahasiswa
$mahasiswa = new Mahasiswa();
// buat variabel utk menampung fungsi getInputan($inputan) yg ada di class Mahasiswa
$getInputan = $mahasiswa->getInputan($inputan);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Inputan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="container">
        <h1>Ini adalah hasil inputan dari Form Sebelumnya</h1>
        <p>NIM : <?php echo $getInputan['nim'] ?> </p>
        <p>NAMA : <?= $getInputan['nama'] ?> </p>
        <p>JENIS KELAMIN : <?= $getInputan['jenis_kelamin'] ?> </p>
    </div>

</body>

</html>