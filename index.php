<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Testing Site</title>
</head>
<body>
    <h2>Linkit</h2>
    <ul>
        <li><a href="array.php">Arrayt</a></li>
        <li><a href="for-loop.php">For Loopit</a></li>
        <li><a href="whileloop.php">While Loop</a></li>
        <li><a href="ifstatement.php">If Lause</a></li>
        <li><a href="switchstatement.php">Switch</a></li>
        <li><a href="strmanipulation.php">String</a></li>
    </ul>
    <!-- Testing -->
    <h1>Hello World</h1>
    <?php
    /*
    Testing
    */
        echo 'Testing';
        echo '<h1>lolz</h1>';
        echo 'Second line';
        echo '<br/>';
        echo '<br/>';
    ?>
    <?php
        $name = 'Henri';
        echo $name;
        echo '<br/>';
        echo '<br/>';
        echo '<h1>My name is: '.$name.'</h1>'
    ?>
</body>
</html>