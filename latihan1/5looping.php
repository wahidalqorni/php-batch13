<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Looping</title>
</head>

<body>
    <?php
    // looping => menampilkan data yang lebih dari satu secara berurut dan berulang sesuai logika yg dibuat

    // sebanyak 10
    // Looping for => perulangan yang diketahui nilai akhirnya
    /*
        for($nilaiawal; $variabel <= batasan; $variabel++ ) :

        endfor;

        for($nilaiawal; $variabel <= batasan; $variabel++ ) {

        }
        */

    for ($i = 1; $i <= 10; $i++) {
        // di sini lakukan intruksi apa yang ingin dijalankan
        echo "Hello ke - $i <br>";
    }

    echo "<hr>";

    // looping while => perulangan yang tidak diketahui nilai akhirnya
    $nilaiawal = 1;
    while ($nilaiawal <= 10) {
        // di sini lakukan intruksi apa yang ingin dijalankan
        echo "Hello ke - $nilaiawal <br>";
        $nilaiawal++;
    }

    echo "<br>";

    // decrement (--)
    for ($j = 10; $j >= 1; $j--) :
        echo "Hello ke - $j <br>";
    endfor;

    echo "<hr>";
    echo "Perulangan data menggunakan Foreach <br>";
    // foreach => perulangan yg datanya bertipe array

    // tipe array yg biasanya dpt dari query database

    // array asosatif
    $dataMahasiswa = array(
        array(
            // key => value
            "id" => 1,
            "nim" => "132121",
            "nama" => "Ahmad"
        ),

        array(
            // key => value
            "id" => 2,
            "nim" => "132122",
            "nama" => "Ahmadi"
        ),
    );

    $data2 = [
        'data1',
        'data2',
        'data3'
    ];

    // lakukan perulangan untuk menampilkan isi $data2
    foreach ($data2 as $dt2) {
        echo $dt2 . '<br>';
    }
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
            <tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($dataMahasiswa as $dtM) :
            ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dtM['nim']  ?></td>
                    <td><?php echo $dtM['nama']  ?></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>