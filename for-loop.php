<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <?php 
        echo '<h2>For Loop</h2>';
        for($arvo = 0; $arvo < 10; $arvo++){
            echo '<p>Hei maailma!D</p>';
        }
        
        for($arvo = 0; $arvo < 10; $arvo++){
            echo "<p>Luku on: $arvo</p>";
        }
    ?>
</body>
</html>