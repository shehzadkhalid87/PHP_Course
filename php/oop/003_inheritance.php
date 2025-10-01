<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Inheritance</h3>
    <?php
    class family
    {
        public $fathername;
        public $mothername;

        public function __construct($fname, $mname)
        {
            $this->fathername = $fname;
            $this->mothername = $mname;

        }
        public function information()
        {
            echo "Father Name : " . $this->fathername . "<br>" .
                "Mother Name : " . $this->mothername . "<br>";
        }
    }
    class Child extends family
    {
        public $name;
        public $age;

        public function __construct($fname, $mname, $name, $age)
        {
            parent::__construct($fname, $mname); // Call the parent constructor
            $this->name = $name;
            $this->age = $age;
        }
        public function childinfo()
        {
            echo "Child Name : " . $this->name . "<br>" .
                "Child Age : " . $this->age . "<br>";
        }

    }
    class child_st extends Child
    {
        public $daily_stpiece; // ✅ fixed singular/plural
    
        public function __construct($fname, $mname, $name, $age, $daily_stpiece)
        {
            parent::__construct($fname, $mname, $name, $age);
            $this->daily_stpiece = $daily_stpiece; // ✅ match variable name
        }

        public function child_stinfo()
        {
            echo "Child Daily Stpieces : " . $this->daily_stpiece . "<br>";
        }
    }



    $child = new Child("John", "Jane", "james", 12);
    $child->information(); // Call method from parent class
    $child->childinfo(); // Call method from child 

    echo "<br><br>";
    
    $child_st = new child_st("John", "Jane", "james", 12, 5);
    $child_st->information(); // Call method from parent class
    $child_st->childinfo(); // Call method from child 
    $child_st->child_stinfo(); // Call method from child_st class
    
    ?>
</body>

</html>