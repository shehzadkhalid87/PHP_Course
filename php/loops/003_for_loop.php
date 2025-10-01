<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>for loop</h3>
    <?php
    // for loop -> it will execute a block of code a specified number of times
    for ($iteration = 1; $iteration <= 10; $iteration++){
        echo "<h2 style='color:green;'>This is iteration Number " . $iteration . "</h2><br>";
    }
    echo "<h3>Another Example</h3>";
    for ($it = 20; $it > 0; $it -= 2){
        echo "<h4 style = 'color: #00008B;'>This is iteration number ". $it . "</h4><br>";
    }
    ?>
</body>
</html>