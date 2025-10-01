<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Conditional Statements in PHP</h2>

    <?php
    $age = 18;

    if ($age < 18)
    {
        echo "Your are not eligible to vote<br>";
    }
    elseif ($age == 18)
    {
        print "Your are eligible to vote.<br> Congrats!<br>";
    }
    else
    {
        print "Something went wrong";
    }


    ?>
</body>
</html>