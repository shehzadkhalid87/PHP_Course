<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Varible Scope</h2>
    <p>There are three types of Variable Scope. they are following:</p>
    <ul>
        <li>Global Scope</li>
        <li>Local Scope</li>
        <li>Static Scope</li>
    </ul>
    <?php
    // Global Scope 
    $x = 23;

    function myglobal(){
        // to access a global variable inside a function we need to use the global keyword
        global $x;

        echo "The value of gobal varible x is : " . $x . "<br>";
    }
    myglobal();

    // local scope : A variable declared inside a function has a local scope and can only be accessed within that function
    function mylocal(){
        $localvar = "<strong>This is a local varible and can only accessed within that fun</strong>";
        echo $localvar . "<br>";
    }
    mylocal(); 
    // Globale indexed array
    $car_price = 24000;
    $car2 = 45000;

    function global_index_array(){
        $GLOBALS['total'] = $GLOBALS['car_price'] + $GLOBALS['car2'];
    }
    global_index_array();
    
    echo "The total price of car is : " . $total . "<br>";


    
    ?>
</body>
</html>