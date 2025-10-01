<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>GLOBAL</h1>
    <?php
    $num1 = 10;
    $num2 = 20;

    function sum()
    {
        $GLOBALS['num3'] = $GLOBALS['num1'] + $GLOBALS['num2'];
    }
    sum();
    echo "The sum of $num1 and $num2 is: " . $num3;

    // another example
    function test()
    {
        $a = 10;
        $b = 20;
        $GLOBALS['c'] = $a + $b;
    }
    test();
    echo "<br>The sum of a and b is: " . $c;
    ?>
</body>

</html>