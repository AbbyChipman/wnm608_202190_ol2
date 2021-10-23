<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php 
    echo "<div>Hello World</div>";
    echo "<div>Goodbye World</div>";

    // Variables
    $a = 5;

    echo $a;

    // String Interpolation
    echo "<div>I have $a things</div>";
    echo '<div>I have $a things</div>';


    // ** VALUES **

    // Number
    // Integer
    $b = 15;
    // Floating point number (Float)
    $b = 0.576;

    $b = 10;

    // String (MUST have quote marks)
    $name = "Darth Maul";

    // Boolean
    $isOn = true;


    // ** Math **
    // PEMDAS (Parentheses, Exponents, Multiplication, Division, Addition, Subtraction)
    echo (5 - 4) * 2;

    // Concatenation (combining strings together)
    echo "<div>b + a" . " = c</div>";
    echo "<div>$b + $a = ".($a + $b)."</div>";
    ?>

    <hr>
    <div>This is my name</div>
    <div>
        <?php
        $firstname = "Aaron";
        $lastname = "Washington";
        $fullname = "<div>$firstname "."$lastname</div>";

        echo $fullname;
        ?>
    </div>

</body>
</html>