<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Abstracat class and method!</h2>
    <?php
    abstract class Animal{
        // abstract method does have any body they just declare and force the child class to implement it
        abstract public function makeSound();
        public function sleep(){
            echo "Sleeping";

        }

    }
    class Dog extends Animal{
        public function makeSound(){
            echo "Woof Woof";
        }
    }
    class Cat extends Animal{
        public function makeSound(){
            echo "Meow meow";
        }
    }
    $dog = new Dog();
    $dog -> makeSound();
    echo "<br>";
    $dog -> sleep();
    echo "<br><br>";
    $cat = new Cat();
    $cat -> makeSound();
    ?>
    
</body>
</html>