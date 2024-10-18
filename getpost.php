<?php
    // $_GET  dan $_POST ada;ah variabel super global
    // variabel ini membawa banyak data yang terjadi di aplikasi

    // $_GET passing data melalui url
    // $_GET["nama"] = "Alifa Kirana";
    // $_GET["alamat"] = "Bandung";
    // var_dump($_GET);


    $arr = [
        [
            "nama" => "Alifa Kirana",
            "kota" => "Bandung",
            "no_telp" => 8518166861,
        ],
        [
            "nama" => "Sylus",
            "kota" => "Banten",
            "no_telp" => 8518160861,
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($arr as $person): ?>
        <li>
            <a href="./get.php?nama=<?= $person['nama']; ?>&kota=<?= $person['kota']; ?>&no_telp=<?= $person['no_telp']; ?>">
                <?= $person['nama']; ?>
            </a>
    </li>
    <?php endforeach; ?>
    </ul>

    <hr/>

    <form method="POST">
        <input type="text"
        name="txt_username"
        placeholder="username"/>

        <input type="password"
        name="txt_password"
        placeholder="password"/>

        <button type="submit">Submit</button>
    </form>

    <?php if(isset($_POST['txt_username'])): ?>
    <h3>Hallo, <?php echo $_POST['txt_username'] ?></h3>
    <?php endif; ?>
</body>
</html>