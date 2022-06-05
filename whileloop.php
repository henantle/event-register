<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php 
        $arvo = 0;
        while($arvo < 10){
            echo '<p>Vähemmän kuin 10!</p>';
            $arvo++;
        }

        echo 'Poistu loopista!';
    ?>

    <h1>DO-While Loop</h1>
    <?php 
    // Tee vähintään kerran
        $arvo = 0;
        do{
            echo '<p>Vähemmän kuin 10!</p>';
            $arvo++;
        }while($arvo < 10);
        echo 'Poistu Loopista!';
    ?>
</body>
</html>