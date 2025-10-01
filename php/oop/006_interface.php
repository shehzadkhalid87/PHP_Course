<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Interface</h2>
    <?php
    // interface is a contract that defines a set of methods that a class must implement
    interface AnimalInterface
    {
        public function name();
        public function makeSound();
    }

    class Dog implements AnimalInterface
    {
        public function name()
        {
            return "dog";
        }
        public function makeSound()
        {
            return "woof woof";
        }
    }
    $dog = new Dog();
    echo "Animal Name: " . $dog->name() . "<br>";
    echo "Animal Sound: " . $dog->makeSound();
    ?>
</body>

</html>