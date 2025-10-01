<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Function</h3>
    <?php
    // function -> a block of code that can be reused multiple times
    function mymessage()
    {
        echo "Hello, welcome to php programming!<br>";
    }
    mymessage();
    echo "<h3> Student Information</h3><br>";

    // function with arguments
    function student($id, $name, $class, $age, $cgpa)
    {
        echo "Student ID:" .$id . "<br>";
        echo "Student Name : " .$name . "<br>";
        echo "Student Class : " .$class . "<br>";
        echo "Student Age : " .$age . "<br>";
        echo "Student CGPA : " .$cgpa . "<br><br>";
    }
    student(101, "Baloch Hussain", "BSCS", 21, 3.5);
    student(102, "Ali Raza", "BSIT", 22, 3.8);
    student(103, "Ayesha Khan", "BSSE", 20, 3.9);
    student(104, "Sara Ahmed", "BSCS", 21, 3.7);
    student(105, "Omar Farooq", "BSIT", 23, 3.6);

    // funtion with default arguments
    echo "<h3>Function with Default Arguments</h3><br>";
    function employee($id = 201, $name= "Atta", $position = "Manager", $salary = 50000)
    {
        echo "Employee ID : " .$id . "<br>";
        echo "Employee Name : " .$name . "<br>";
        echo "Employee Position : " .$position . "<br>";
        echo "Employee Salary : " .$salary . "<br><br>";
    }
    employee();
    employee(202, "Ahmed", "Developer", 60000);


    // FUNTION WITH RETURN TYPE
    echo "<h3>Function with Return Type</h3><br>";
    function calculateArea($length, $width)
    {
       
        return $length * $width;
    }
    $area = calculateArea(10, 20);
    echo "Area of Rectangle : " . $area . "<br>";

    // passing by reference
    echo "<h3>Function with Passing by Reference</h3><br>";
    function addFive(&$value)
    {
        $value += 5;
    }
    $num = 10;
    addFive($num);
    echo "Value after adding five : " . $num . "<br>";

    ?>
</body>
</html>