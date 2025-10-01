<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Constant</h2>
    <?php
    // constant are immutable values which are defined by using const keyword
    // constant value can not be changed during the script execution
    // constant are case-sensitive by default. but we can make them case-insensitive by passing true as third argument of define() function
    // constant are globally accessible and can be used
    class test{
        const pi = 3.1416;

        public function PI(){
            echo "The Value of pi is : " . self::pi;
        }

    }
    define("GREETING", "Welcome to PHP Constants Turorial.");
    echo GREETING;
    class greeting{
        const Message = "Welcome to PHP OOP Constants Turorial.";
    }
    echo "Using Class Name : " . greeting::Message;
    echo "<br>";
    echo greeting::Message;
    echo "<br><br>";
    $obj = new test();
    $obj ->PI();


    ?>
</body>
</html>