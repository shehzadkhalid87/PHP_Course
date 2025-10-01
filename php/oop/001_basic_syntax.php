<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Class and object</h1>
    <?php
    class Car {
        // properties
        public $name;
        public $brand;
        public $productionyear;
        public $color;


        // methods -> setter 
        function set_name($name){
            $this -> name = $name;
        }
        function set_brand($brand){
            $this -> brand = $brand;
        }
        function set_productionyear($productionyear){
            $this -> productionyear = $productionyear;
        }
        function set_color($color){
            $this -> color = $color;
        }

        // method -> getter
        function get_name(){
            return $this -> name;
        }
        function get_brand(){
            return $this -> brand;
        }
        function get_productionyear(){
            return $this -> productionyear;
        }
        function get_color(){
            return $this -> color;
        }
        function get_info()

        {
            return "Car Namme :" .$this->name . "<br>" .
                   "Car Brand :" .$this->brand . "<br>" .
                   "Car Production Year :" .$this->productionyear . "<br>" .
                   "Car Color :" .$this -> color . "<br>";
        }
    }
    // creating object
    $car1 = new Car();
    $car1 -> set_name("Civic");
    var_dump($car1 instanceof Car); // checking object is instance of class or not
    $car1 -> set_brand("Honda");
    $car1 -> set_productionyear(2020);
    $car1 -> set_color("Black");
    echo $car1 -> get_info();


    ?>
</body>
</html>