<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php 
        echo '<h2>Switch Case</h2>';
        $kirjain = 'C';
        switch($kirjain) {
            case 'A':
                echo '<h2>Kirjain on A</h2>';
                break;
            case 'B':
                echo '<h2>Kirjain on B</h2>';
                break;
            default:
            echo '<h2>Kirjain on jotain muuta!</h2>';
            break;
        }
    ?>
</body>
</html>