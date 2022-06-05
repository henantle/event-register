<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
        $numero = 3;
        $numerot = array(1,2,3,4,5,6,7,8,9,10);
        echo $numerot[5];

        echo "<p>$numerot[9]</p>";
        
        $koko = count($numerot);
        echo "<p>Array koko on: $koko ja tässä kaikki numerot:</p>";

        for($luku = 0; $luku < $koko; $luku++){
            echo "<p>$numerot[$luku]</p>";
        }
    ?>
</body>
</html>