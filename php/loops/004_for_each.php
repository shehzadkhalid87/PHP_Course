<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 style="color:red;">for each loop</h3>
    <?php
    // for each loop -> it will loop through each item in an array
    $car = array("BMW", "Toyota", "Honda", "Ford", "Chevrolet");
    foreach ($car as $value){
        echo "<h2 style='color:green;'>This is car brand " . $value . "</h2><br>";
    }
    echo "<h3>Assocative array</h3>";
    $name = array("first_name" => "baloch", "last_name" => "Hussain", "age" => 21, "city" => "Turbat", "class" => "BSCS");
    foreach ($name as $key => $value)
    {
        echo "<h2 style='color:blue;'>" .$key . " : " . $value . "</h2>";
    }
    ?>
    
</body>
</html>