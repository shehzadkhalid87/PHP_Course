<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first php heading</h1>

    <?php 
    // in php we use echo to print something on the screen
    // every php statment ends with a semicolon
    // php is not a case sensitive lang
    echo "hello world!<br>";
    ECHO "hello world!<br>";
    EcHo "hello world!<br>";
    

    // but varible names are case sensitive
    $NAME = "doe";
    $Name = "mike";
    $name = "john";
    echo "<h2>Declaring a variables.</h2> <br>";
    echo "my name is " . $name . "and i am a web developer<br>";
    echo "my name is " .$Name . "and i am a web developer<br>";
    echo "my name is " .$NAME . "and i am a web developer<br>";

    // using print function to print something on the screen
    print "this is printed using print function<br>";

    
    ?>
</body>
</html>