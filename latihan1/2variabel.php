<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Variabel</title>
</head>

<body>
    <?php
        // membuat variabel
        $nama_lengkap = "M. Wahid Alqorni"; // String
        $nim = 13540080; // int
        $laki_laki = true; // boolean
    ?>

    <h1>Haloooo..... <?php echo $nama_lengkap ?> </h1>
    <p> <?php echo "NIM : $nim " ?> </p>
    <br>
    <p> <?php echo 'NIM : $nim ' . $nim ?> </p>
    <br>
    <p> <?php echo 'Laki-laki : ' . $laki_laki . '<br> Alamat : Gandus' ?> </p>

</body>

</html>