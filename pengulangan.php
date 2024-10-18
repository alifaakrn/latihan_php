<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>
<body>
    <!-- start -->
    <?php
    // pengulangan for
        for($i = 0; $i < 5; $i++){
            echo "<p>Ini Pengulangan ke " .$i . "</p>";
        }
    ?>
    <!-- end -->
    <hr/>
    <!-- start -->
    <?php
        // pengulangan while
        $a = 0;
        while($a < 5){
            echo "<p>Ini Pengulangan ke " .$a . "</p>";
            $a++;
        }
    ?>
    <!-- end -->
    <hr/>
    <!-- start -->
    <?php
        // pengulangan do while
        $b = 6;
        do{
            echo "<p>Ini Pengulangan ke " .$b . "</p>";
            $b++;
        }while($b < 5);
    ?>
    <!-- end -->    
</body>
</html>
