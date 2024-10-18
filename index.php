<?php
    // Standar output

    #start
        // ini untuk menampilkan kalimat/string
        // gunakan \n untuk enter di terminal
        // gunakan <br/> untuk di browser
        echo "Alifa Kirana (menggunakan echo)\n";
        echo "<br/>";

        // cara kedua
        print "Alifa Kirana (menggunakan print)\n";
        echo "<br/>";


        // print_r adalah fungsi build-in dari PHP
        // print_r untuk menampilkan nilainya aja seperti string, array, dsb jadi harus pake ("")
        print_r("Alifa Kirana (menggunakan print_r)\n");
        echo "<br/>";


        // var_dump adalah fungsi build-in dari PHP
        // cara ketia khusus untuk analisa data/untuk programer
        var_dump("Alifa Kirana (menggunakan var_dump)\n");  
        echo "<br/>";

        // biasa pakai echo
        // analisa biasa pakai var_dump
    #end

    #start
        // menggabungkan 2 string gunakan . (dot)
        echo "Alifa Kirana" . " (menggunakan echo)\n" ;
        echo "<br/>";

        print "Alifa Kirana" .  "(menggunakan print)\n";
        echo "<br/>";

        print_r("Alifa Kirana" .  "(menggunakan print_r)\n");
        echo "<br/>";

        var_dump("Alifa Kirana" . " (menggunakan var_dump)\n");
        echo "<br/>";
    #end

    #start
        $string_satu = "Alifa Kirana\n";
        $string_dua = "(Menggunakan variable terpisah)\n";

        echo $string_satu . ' ' . $string_dua;
        #end

        #start
        echo 12; //interger

        echo "12\n"; //string

        echo 12 + 8 . "\n"; //interger

        echo "12" + 8; //string
        //secara default string di convert ke int oleh php
        //bukan cara yang rekomendasi
    #end

    #start
        $x = 3;
        $y = 10;

        $hasilxy = $x * $y;

        echo "Hasil dari ".$x." x ".$y." = " . $hasilxy . "\n";
    #end

    #start
        echo 25 + 5;
        echo "\n";
        echo 25 - 5;
        echo "\n";
        echo 25 * 5;
        echo "\n";
        echo 25 / 5;
        echo "\n";
        echo 25 % 2; //modulus untuk mencari nilai akhir apakah ada sisa atau tidak
        echo "\n";
    #end

    #start
        $a = 5;
        $a += 10;
        echo $a."\n";

        $a = "Alifa";
        $a .= "Kirana";
        $a .= "hai ini nyambung lagi";
        echo $a;
    #end

    #start
        // biasanya untuk menggabungkan tag HTML pada logic
        $a = "<div>";
        $a .= "<h3>Alifa Kirana</h3>";
        $a .= "<p>(Gunakan . untuk menggabungkan) </p>";
        $a .= "<p>Sambungan lagi</p>";
        $a .= "</div>";
        echo $a . "\n";
    #end

    #start
        //boolean true/false || 1/0
        var_dump(1 == "1"); // true - karena hanya membandingkan value
        var_dump(1 === "1"); // false - karena membandingkan juga dengan tipe datanya
    #end

    #start
        // operator logika && (and), || (or), ! (not), > (more than), < (less than), = (equal), >= (more than or equal), <= (less than or equal), != (not equal)
        $umur = 17;

        var_dump($umur < 20 && $umur >= 16);
        
        $nama = "A.K";
        var_dump($nama == "A.K");
    #end

    #start
        $nama = "Alifa Dewi Kirana";
        $umur = "21";
        $birthday = "04-02-2003";
    #end
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba php</title>
</head>
<body>
    <ul>
        <li>Nama : <?php echo $nama; ?></li>
        <li>Umur : <?php echo $umur; ?></li>
        <li>Tanggal Lahir : <?php echo $birthday; ?></li>
        <li>5 x 5 adalah : <?php echo 5*5; ?></li>
    </ul>

    <ul>
        <li>Nama : <?= $nama; ?></li>
        <li>Umur : <?= $umur; ?></li>
        <li>Tanggal Lahir : <?= $birthday; ?></li>
        <li>5 x 5 adalah : <?= 5*5; ?></li>
    </ul>
</body>
</html>