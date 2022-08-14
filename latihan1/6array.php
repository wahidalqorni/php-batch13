<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //  array => tipe data yg bisa menyimpan lebih dari 1 nilai

    // array indexing
    $buah = ['Apel', 'Anggur', 'Mangga'];

    var_dump($buah);
    print_r($buah);
    echo $buah[2];

    echo "<hr>";

    // array associative
    // terdiri dari key dan value
    $anggota = [
        "Dani" => "Ketua",
        "Edo" => "Wakil",
        "Fariz" => 'Anggota'
    ];

    echo $anggota['Dani'];
    ?>

    <hr>
    <h4>Indexed Array</h4>
    
    <!-- list number -->
    <ol>
        <!-- lakukan foreach di linya -->
        <?php foreach($buah as $b) { ?>
            <li><?= $b?></li>
        <?php } ?>
    </ol>

    <h4>Associative Array</h4>

    <!-- list bullet -->
    <ul>
        <!-- lakukan foreach di linya -->
        <?php foreach($anggota as $key => $value) { ?>
            <li>
                <!-- $key untuk menampung key yg ada di array -->
                <!-- $value untuk menampung value yg ada di array -->
                <?php echo "Key : $key , Value : $value  " ?> 
            </li>
        <?php } ?>
    </ul>

</body>

</html>