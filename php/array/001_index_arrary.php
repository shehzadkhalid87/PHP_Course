<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// index array -> an array with a numeric index
$people = array('Kevin', 'Jeremy', 'Sara');

foreach ($people as $person){
    echo '<p>' . $person . '</p><br>';
}
array_push($people, 'Brad');
foreach ($people as $person){
    echo '<p>' . $person . '</p><br>';
}
// $people[1] = 'Brad';
// foreach ($people as $person){
//     echo '<p>' . $person . '</p>';
// }


?>
</body>
</html>