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

    <?php
    $firstname = "Aaron";
    $lastname = "Washington";
    $fullname = "<div>$firstname "."$lastname</div>";

    echo $fullname;
    ?>

    <hr>

    <?php
    // Superglobal
    // Add to URL ?name=Aaron
    echo "<a href='?name=Aaron'>Add Name</a>";
    echo "<div>My name is {$_GET['name']}</div>";

    // Add to URL ?name=Aaron&type=textarea
    echo "<a href='?name=Aaron&type=textarea'>Make Text Box</a>";
    echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";
    ?>

    <hr>

    <?php
    // Array is a small group of values
    $colors = array("#EA3D3D","green","blue");

    // Array index always starts with 0
    echo $colors[2];

    echo "
        <br />$colors[0]
        <br />$colors[1]
        <br />$colors[2]
    ";

    // Count shows number of items in the array
    echo count($colors);
    ?>

    <div style="color:<?= $colors[0] ?>">This text is red</div>

    <hr>

    <?php
    // Associative Array
    $colorsAssociative = [
        "red" => "#f00",
        "green" => "#0f0",
        "blue" => "#00f"
    ]; 

    echo $colorsAssociative['green'];
    ?>

    <hr>

    <?php
    // Casting is changing object types

    // Change number to string
    $c = "$a";

    // Change string to a number
    $d = $c*1;

    $colorsObject = (object)$colorsAssociative;

    echo "<hr>";

    // Array Index Notation
    echo $colors[0]."<br />";
    echo $colorsAssociative['red']."<br />";
    echo $colorsAssociative[$colors[0]]."<br />";

    // Object Property Notation
    echo $colorsObject->red."<br />";
    echo $colorsObject->{$colors[0]}."<br />";
    ?>

    <hr>

    <?php
    // Printing all object types to page 
    print_r($colors);
    echo "<hr>";
    print_r($colorsAssociative);
    echo "<hr>";
    print_r($colorsObject);
    echo "<hr>";
    // Include nice default spacing and layout (HTML by default strips all spacing)
    echo "<pre>",print_r($colorsObject),"</pre>";

    // Make our first Function!
    function print_p($v) {
        echo "<pre>",print_r($v),"</pre>";
    }

    print_p($_GET);

    ?>



</body>
</html>