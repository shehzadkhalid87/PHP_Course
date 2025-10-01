<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>creating and declearing varibles.</h1>
    <?php
    // variables in php are represented by a dollar sign followed by the name of the variable
    // variable names must start with a letter or the underscore character
    // variable names cannot start with a number
    // variable names can only contain alpha-numeric characters and underscores (A-z, 0
    // variable names in php are case-sensitive ($age and $AGE are two different variables)

    $name = "baloch khan"; // string variable
    $roll_no = "F202105041"; // string variable
    $department = "computer science"; // string variable
    $age = 22; // integer variable
    $cgpa = 2.23; // float variable
    $is_enrolled = true; // boolean variable

    echo "My name is " . $name . "<br>";
    echo "My roll number is " . $roll_no . "<br>";
    echo "My department is " . $department . "<br>";
    echo "My age is " . $age . "<br>";
    echo "My cgpa is " . $cgpa . "<br>";
    echo "Am i enrolled? $is_enrolled  <br>";


    // TO get the type of a variable use gettype() function
    echo "The type of name is " . gettype($name) . "<br>";
    echo "The type of roll_no is " . gettype($roll_no) ."<br>";

    var_dump($roll_no); // this function will give you more information about the variable like its type and value
    
    ?>
</body>
</html>