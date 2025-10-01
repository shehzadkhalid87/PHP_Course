<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>While Loop</h3>
    <?php
    // while loop -> it will execute a block of code as long as the condition is true
    $iteration = 1;
    while ($iteration <= 10)
    {
        if ($iteration <= 3) {
            echo "<h2 style='color:green;'>This is iteration Number " . $iteration . "</h2><br>";
            
        } elseif ($iteration <= 6) {
            echo "<h2 style='color:blue;'>This is iteration Number " . $iteration . "</h2><br>";
        } else {
            echo "<h2 style='color:red;'>This is iteration Number " . $iteration . "</h2><br>";
        }
        echo "This is iteration Number " . $iteration . "<br>";
        $iteration++;

    }
    echo "<h3>Another Example</h3>";
    $iter = 0;
    while ($iter < 100){
        
        $iter += 10;
        echo "<h4 style = 'color: #00008B;'>This is iteration number ". $iter . "</h4><br>";

     
    }

    ?>
</body>

</html>