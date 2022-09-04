<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form II</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Luas Persegi Panjang</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="panjang" class="form-label">Panjang</label>
                <input type="number" class="form-control" id="panjang" name="panjang" placeholder="Masukkan Panjang" value="<?= @$_POST['panjang'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="lebar" class="form-label">Lebar</label>
                <input type="number" class="form-control" id="lebar" name="lebar" placeholder="Masukkan Lebar" value="<?= @$_POST['lebar'] ?>" required>
            </div>

            <button name="proses" class="btn btn-primary">Submit</button>
        </form>


        <!-- tampilkan hasil pengolahan data luas persegi panjang saat button diklik -->
        <?php
        // saat button dgn name proses diklik
        if (isset($_POST['proses'])) : // awal if

            include 'class/Perhitungan.php';

            // siapkan variabel panjang dan lebar utk dikirim ke function luasPersegiPanjang yg ada di file function.php
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];   

            // buatkan object dari class Perhitungan
            $perhitungan = new Perhitungan();

            // siapkan variabel utk hasil perhitungan luas
            $luas = $perhitungan->luasPersegiPanjang($panjang, $lebar);

        ?>
            <p>
                Panjang : <?= $panjang ?>
            </p>
            <p>
                Lebar : <?= $lebar ?>
            </p>
            <p>
                Luas : <?= $luas ?>
            </p>

        <?php
        endif; // akhir if
        ?>

    </div>
</body>

</html>