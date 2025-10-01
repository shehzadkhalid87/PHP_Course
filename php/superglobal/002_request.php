<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Request</h1>
    <?php
    $_REQUEST['name'] = "Baloch Khan"; // Simulating a request parameter for demonstration
    $_REQUEST['age'] = 30;
    echo "Name: " . $_REQUEST['name']; // Outputs the value of the 'name' parameter from the request
    echo "<br>Age: " . $_REQUEST['age']; // Outputs the value of
    ?>
</body>
</html>