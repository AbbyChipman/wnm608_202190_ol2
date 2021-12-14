<?php

include "../lib/php/functions.php";

//$filename ="notes.json";
//$file = file_get_contents($filename);
//$notes_object = json_decode($file);

//$notes_object = file_get_json("notes.json");
$users_array = file_get_json("../data/users.json");

//print_p($notes);

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Users Admin Page</title>

	<?php include "../parts/meta.php"; ?>

</head>

<body>

<?php include "../parts/navbar.php"; ?>
		

<div class="container">

	<div class=" card soft">
		<h2>Users</h2>
<nav class="nav nav-crumbs">
<ul>
<li><a href="/aau/wnm608/flores.annamarie/adminTest/usersTest.php">User Admin Page</a></li>
</ul>
	
</nav>
<?php



for($i=0;$i<count($users_array);$i++){
	echo "<li>
	<strong>{$users_array[$i]->name}</strong>
	<span>{$users_array[$i]->type}</span>
	</li>";

}

?>
	</div>

</div>


</body>
</html>