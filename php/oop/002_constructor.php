<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Constructor Method</h1>
    <?php
    class Cars {
        // properties
        public $name;
        public $brand;
        public $productionyear;
        public $color;


        // constructor 
        function __construct($name, $brand, $productionyear, $color)
        {
            $this -> name = $name;
            $this-> brand = $brand;
            $this-> productionyear = $productionyear;
            $this-> color = $color;
        }
        function get_infor(){
            return "Car Namme :" .$this->name . "<br>" .
                   "Car Brand :" .$this->brand . "<br>" .
                   "Car Production Year :" .$this->productionyear . "<br>" .
                   "Car Color :" .$this -> color . "<br>";
        }

        // the __destruct() method is called when the object is destroyed or the script ends.
        function __destruct(){
            echo "the __destruct() method is called when the object is destroyed or the script ends.";
            echo "<br>The car object is destroyed.";

        }

    }
    // Creating Object and passing values to const
    $car = new Cars ("BMW", "X55", 2025, "White");
    echo $car -> get_infor();

    ?>
</body>
</html>