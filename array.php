<?php
    // Cara lama
    // $array1 = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat");

    // Cara baru
    $array2 = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];

    // Echo hanya bekerja untuk string/int
    // Khusus debugging / Developer
    //var_dump() / print_r
        // var_dump($array1);
        // echo "<br/";
        // print_r($array1);    
        // echo "<br/";
        // echo $array2[1];

        // Cara 1
        for($i = 0; $i < count($array2); $i++){
            echo $array2[$i] . "<br/>";
        }

        echo "<hr/>";

        // Cara 2
        foreach($array2 as $hari){
            echo $hari . "<br/>";
        }
?>