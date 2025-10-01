<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // associative array -> an array with string keys
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    echo $people['Brad'] . '<br>';

    $car = array(
        'Honda' => 1990,
        'Toyota' => 2000,
        'Ford' => 2010
    );
    echo $car['Ford'] . '<br>';

    foreach ($car as $key => $value) {
        echo '<p>' . $key . ' - ' . $value . '</p>';
    }

    ?>

</body>

</html>