<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


<!--PHP BLOCK - TEST-->	
	<?php

	echo "<div>Hello World</div>";
	echo "<div>Love</div>";






//****VALUE TYPES****


//Variables

	
	$a = 10;
	echo $a;

	$b = 5;



// String Interpolation
	echo "<div>I have $a strings</div>"; // double quote string
	echo '<div>I have $a strings</div>'; // single quote string



// Numbers 
	//INTEGER/ WHOLE NUMBER
	$c = 20;
	// FLOAT / FLOATING POINT NUMBER/ REAL NUMBER
	$c = 0.123;



// String
	$name="<div> Git er done</div>";

	echo "$name";



// Boolean
	$isOn = true;
	$isOff = false;







//**** MATH, ORDER OF OPERATION
//**** PARENTHESIS, EXPONENTS, MULTIPLICATION, DIVISION, ADDITION, SUBTRACTION****

	echo 5 + 4 * 2;

	// Concatenation
	echo "<div> b+a"." = c</div>";
	echo "<div> $b + $a "." = ($a+$b)</div>";
	echo "<div> $b + $a = ".($a+$b)."</div>";
	echo "<div> $c + $a = ".($a+$c)."</div>";


	?>



<hr>
<div>This is My Name</div>
<div>

<?php






// STRING TEST

$firstname = "Annamarie";
$lastname = "Cruz Flores";
$fullname1= $firstname ." ". $lastname;
$fullname2= "$firstname $lastname";

echo "<div> $fullname1 </div>";
echo "<div> $fullname2 </div>";

?>


<hr>


<?php

//SUPERGLOBAL
//?name=Anna
//?id=Marie


//echo $_GET['name'];
//echo $_GET['id'];

//Surround with brace for complex variables to know its one variable value:
echo "<a href='?name=Anna'>Click</a>";
echo "<div>My name is {$_GET['name']}</div>";


//TIP: highlight div, press ctrl, highlight div again to change
//Use ampersand to add another variable into your GET array


//?name=Anna&type=textarea
echo "<a href='?id=Marie&type=textarea'>Click</a>";
echo "<{$_GET['type']}>My name is {$_GET['id']}</{$_GET['type']}>";


?>



<!--ARRAYS-->




<?php

$colors = array("red","blue","green"); // Index: 0,1,2 ..

echo $colors[0];

//multiline string 
echo "
<br>$colors[0]
<br>$colors[1]
<br>$colors[2]

";

//count Function - amount of items in fruits array
echo count($colors);

?>


<div>
	This text is blue
</div>

<div style="color:<?= $colors[1] ?>">
	This text is blue
</div>


<!--OBJECTS / ASSOCIATIVE ARRAY-->
<hr>

<?php

	//Associative Array

	$colorsAssociative = [ // property name assigned to a value
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f",
		"00f" => "blue"
];


echo $colorsAssociative['green'];
echo $colorsAssociative['00f'];


	//Casting - Converting value types

	$c="$a";
	$d=$c*1;

	$colorsObject =(object)$colorsAssociative;

	//echo $colorsObject;

	echo "<hr>";
	//Array Index Notation

	echo $colors[0]."<br>";
	echo $colorsAssociative['red']."<br>";
	echo $colorsAssociative[$colors[0]]."<br>";


	// Object Property Notation
	echo $colorsObject->red."<br>";
	echo $colorsObject->{$colors[0]}."<br>";

?>

<hr>

<?php

print_r($colors);
echo "<hr>";
print_r($colorsAssociative);
echo "<hr>";
print_r($colorsObject);
echo "<hr>";

echo "<pre>",print_r($colorsObject),"</pre>";


//**************** FUNCTION ***************
//needs values passed into them
function print_p($v){
	echo "<pre>",print_r($v),"</pre>";
	}


	print_p($_GET); //?name=Anna



echo "<hr>";

//ACCESS TO SUPERGLOBALS
	print_p($GLOBALS);

?>





</body>
</html>