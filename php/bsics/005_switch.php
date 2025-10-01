<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Switch Case</h1>
    <?php
    $grade = 1;

    switch ($grade) {
        case 1;
            echo "<h2 style='color:green;'>Exellent!<h2>";
            break;
        case 2;
            echo "<h2 style='color:blue;'>Great!<h2>";
            break;
        case 3;
            echo "<h2 style='color:orange;'>Good!<h2>";
            break;
        case 4;
            echo "<h2 style='color:purple;'>You need to improve!<h2>";
            break;
        case 5;
            echo "<h2 style='color:red;'>Sorry! You failed.<h2>";
            break;
        default:
            echo "<h2 style='color:black;'>Invalid grade.<h2>";
    }
    ?>
</body>

</html>