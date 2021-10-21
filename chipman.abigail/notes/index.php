<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spoot</title>
</head>
<body>
    <?php 
        echo "spoot"; 

        $a = 5;

        echo "<div>I have $a things.</div>";
        echo '<div>I have $a things.</div>';

        //NUMBER
        //INTEGER
        $b = 15;
        //FLOAT
        $b = 0.576;

        $b = 10;

        //STRINGS
        $name = "Yerguy2";

        //BOOLEAN
        $isOn = true;

        //math
        //PEMDAS
        echo (5 - 4) * 2;

        //concatenation

        echo "<div> b + a" . " = c</div>";
        echo "<div> $b + $a =" . ($a+$b) . "</div>";
    ?>

    <hr>
    <div>This is my name: </div>
    <div>
    <?php

    $firstname = "Abigail";
    $lastname =  "Chipman";
    $fullname = $firstname . " " . $lastname;

    echo $fullname;

    ?>

    <hr>

    <?php

    //superglobals

    echo "<div>My name is {$_GET['name']}</div>";
    echo "<{$_GET['type']}>My name is {$_GET['name']}</{$_GET['type']}>";

    ?>

    <hr>
    <?php
    
    $colors = array("red", "green", "blue");
    echo $colors[0];
    echo "
    <br> $colors[0]
    <br> $colors[1]
    <br> $colors[2]
    ";

    echo count($colors);
    ?>

    <div style="color:<?= $colors[1] ?>">This text is green</div>

    <hr>

    <?php
    //associative array

    $colorsAssoc = [
        "red" => "#f00",
        "green" => "#0f0",
        "blue" => "#00f"
    ];

    echo $colorsAssoc["green"];
    ?>

    <hr>
    <?php

    //Casting

    $c = "$a";
    $d = $c*1;

    $colorsObject = (object)$colorsAssoc;

    //echo colorsObject

    echo "<hr>";

    //Array Index Notation

    echo $colors[0]."<br>";
    echo $colorsAssoc['red']."<br>";
    echo $colorsAssoc[$colors[0]]."<br>";

    //Object Property Notation

    echo $colorsObject->red."<br>";
    echo $colorsObject->{$colors[1]}."<br>";
    ?>

    <hr>

    <?php

    print_r($colors);
    echo "<hr>";

    print_r($colorsAssoc);
    echo "<hr>";

    echo "<pre>",print_r($colorsObject),"</pre>";
    echo "<hr>";

    //Function

    function print_p($v) {
        echo "<pre>",print_r($v),"</pre>";
    }

    print_p($_GET);
    ?>
</body>
</html>