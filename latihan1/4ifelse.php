<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan If ELSE</title>
</head>
<body>
    <h1>Nilai</h1>

    <?php
        /*
        if() :

        endif;

        */
        $nUTS = 70;
        $nUAS = 98;
        $nRata = ($nUTS + $nUAS) / 2;

        $nilai = 98;
        $x = 70;

        // satu kondisi
        if($x == 70) {
            $ket = "Benar 70";
        }

        // dua kondisi
        if($nilai > 80) {
            $keterangan1 = "LULUS";
        } else {
            $keterangan1 = "TIDAK LULUS";
        }

        // multiple kondisi
        // 90 - 100
        if($nRata >= 90 && $nRata <= 100 ) {
            $keterangan = "A";
        } 
        // 80 - 89
        else if($nRata >= 80 && $nRata <= 89 ) {
            $keterangan = "B";
        }
        // 70 - 79
        else if($nRata >= 70 && $nRata <= 79 ) {
            $keterangan = "C";
        }

        else if($nRata < 70) {
            $keterangan = "D";
        } else {
            $keterangan = "Undefined";
        }

        $var = 78;
        $var2 = 98;

        if($var == 88 || $var == 78) { // || -> OR
            $hasil = "Ya!";
        } else {
            $hasil = "Tidak!";
        }

        if($var == 88 && $var2 == 98 ) { // && -> AND
            $hasil2 = "Ya!";
        } else {
            $hasil2 = "Tidak!";
        }
    ?>

    <p>Nilai : <?php echo "<p>Nilai : $nilai</p>"  ?> </p>
    <p>Keterangan : <?php echo $keterangan ?> </p>
    <p>Hasil : <?php echo $hasil ?> </p>
    <p>Hasil2 : <?php echo $hasil2 ?> </p>


</body>
</html>