<?php
    $arr = [
        ["Senin", "Selasa", "Rabu"],
        ["Januari", "Februari", "Maret"],
        ["2020", "2021", "2023"],
    ];

    $dataPerson  = [
        [
            "nama"=> "Alifa Kirana",
            "kota"=>  "Bandung",
            "baju"=> "Coklat",
            "makanan_favorit"=> ["Bebek goreng", "Sei", "Pisang goreng"]
        ],
        [
            "nama"=> " Leon ",
            "kota"=>  "Bandung",
            "baju"=> "Coklat",
            "makanan_favorit"=> ["Soto", "Leupeut"]
        ],
        [
            "nama"=> "Ada",
            "kota"=>  "Bandung",
            "baju"=> "Merah",
            "makanan_favorit"=> ["Pasta", "escargot", "pinacolada"]
        ]
    ];
    // foreach($arr as $data){
    //     var_dump($data);
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>
<body>
    <!-- <?php foreach($arr as $data): ?>
    <ul style="margin-botto,: 24px;">
            <li>Index 1 : <?= $data [0] ?></li>
            <li>Index 2 : <?= $data [1] ?></li>
            <li>Index 3 : <?= $data [2] ?></li>
    </ul>
    <?php endforeach; ?> -->

    <!-- <?php echo $dataPerson[0]['nama']; ?> -->

    <?php foreach($dataPerson as $data): ?>
    <ul style="margin-bottom,: 24px;">
        <li>Nama: <?php echo $data['nama']; ?></li>
        <li>Kota: <?php echo $data['kota']; ?></li>
        <li>Baju: <?php echo $data['baju']; ?></li>
        <li>Makanan Favorite: 
            <ol>
                <?php foreach($data['makanan_favorit'] as $makanan): ?>
                    <li><?php echo $makanan; ?></li>
                <?php endforeach; ?>
            </ol>
        </li>
    </ul>
    <?php endforeach; ?>

</body>
</html>