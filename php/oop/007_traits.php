<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Traits</h2>
    <?php
    trait Logger{
        // traits are a mechanism for code reuse in single inheritance languages like PHP
        // traits are similar to classes but they are intended to group functionality in a fine-grained
        public function log($messagge){
            echo "[LOG]:" .date('Y-m-d H:i:s') . " - " . $messagge . "<br>";

        }
    }
        class Aplication{
            use Logger; // using the trait;
            public function run(){
                $this->log("Application is ruunning using traits");
            }
        }
        $app = new Aplication();
        $app -> run();


    ?>
</body>
</html>