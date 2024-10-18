<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <?php
        // if-else
        // if-else if-else
        // ternary
        //  switch

        $umur = 18;
        #start
            // if($umur == 20){
            //     // true
            //     echo "Umur sama dengan 20";
            // }else if($umur < 20){
            //     //true apabila kondisi pertama tidak terpenuhi
            //     echo "Umur sama kurang dari 20";
            // }else if($umur < 30){
            //     //true apabila kondisi kedua tidak terpenuhi
            //     echo "Umur sama kurang dari 30";
            // }else{
            //     // false
            //     echo "Umur lebih dari 30";
            // }
        #end

        // #start
            // ternary
            //     echo ($umur < 30 ? "Umur kurang dari 30" : "Umur lebih dari 30");
        // #end

        // #start
            // ternary
                switch($umur){
                    case 15:
                    case 16:
                    case 17:
                    case 18:
                    case 19:
                        echo "Umur dibawah 20 diatas 14";
                        break;
                    case 20;
                        echo "umur 20";
                        break;
                    default:
                        echo "umur tidak di definisikan";
                }
        // #end
    ?>
</body>
</html>