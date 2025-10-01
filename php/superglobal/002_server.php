<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Server</h2>
    <?php
    echo "The current script name is: " . $_SERVER['PHP_SELF']; // Outputs the filename of the currently executing script
    echo "<br>The server name is: " . $_SERVER['SERVER_NAME']; // Outputs the name of the server host
    echo "<br>The HTTP request method is: " . $_SERVER['REQUEST_METHOD']; // Outputs the request method used to access the page (e.g., GET, POST)
    echo "<br>The user agent is: " . $_SERVER['HTTP_USER_AGENT']; // Outputs the user agent string of the browser
    echo "<br>The script filename is: " . $_SERVER['SCRIPT_FILENAME']; // Outputs the absolute path of the currently executing script
    echo "<br>The server software is: " . $_SERVER['SERVER_SOFTWARE'];  // Outputs the server identification string
    ?>
</body>
</html>