<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>do while loop</h3>
    <?php
    // do while loop -> it will execute a block of code once, and then it will repeat the loop as long as the condition is true
    $iteration = 0;
    do {
        echo "<h2 style='color:green;'>This is iteration Number " . $iteration . "</h2><br>";
        $iteration += 10;
    } while ($iteration < 200);

    echo "<h3>Another Example</h3>";
    $it = 11;
    do {
        echo "<h4 style = 'color: #00008B;'>This is iteration number ". $it . "</h4><br>";
        $it -= 2;   
    } while ($it > 0);
    
    ?>
</body>
</html>