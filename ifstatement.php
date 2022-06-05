<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If lauseet</title>
</head>
<body>
    <?php 
        echo '<h2>If Statements</h2>';
        $arvosana = 50;
        if($arvosana >= 50) {
            echo '<h3 style="color: green">Arvostelu hyväksytty!</h3>';
        } else {
            echo '<h3 style="color: red">Arvostelu hylätty!</h3>';
        }
        $kirjain = 'C';
        if($kirjain == 'A') {
            echo '<h3 style="color: green">Kirjain on A!</h3>';
        } elseif($kirjain == 'B') {
            echo '<h3 style="color: red">Kirjain on B!</h3>';
        } else {
            echo '<h3 style="color: red">Kirjain on jotain muuta!</h3>';
        }
    ?>
</body>
</html>