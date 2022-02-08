<?php

include "../lib/php/functions.php";


$filename="../data/user.json";
$users = file_get_json($filename);


$empty_user = (object)[
	"name"=>"",
	"type"=>"",
	"email"=>"",
	"classes"=>[]
];



if(isset($_GET['action'])) {
	switch($_GET['action']) {
		case "update":
	$users[$_GET['id']]->name= $_POST['user-name'];
	$users[$_GET['id']]->type= $_POST['user-type'];
	$users[$_GET['id']]->email= $_POST['user-email'];
	$users[$_GET['id']]->classes= explode(", ", $_POST['user-classes']);

	file_put_contents($filename,json_encode($users));
	header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
	break;
	
		case "create";
	break;
	
		case "delete";
	break;
	}
}



function showUserPage($user){

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$classes= implode(", ", $user->classes);

echo <<<HTML

<nav class="nav nav-crumbs">
<ul>
<li><a href="admin/forms.php">Back</a></li>
</ul>
</nav>


<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=update">

<h2>$addoredit User</h2>

<div class="form-control">
<label class="form-label" for="user-name">Name</label>
<input class="form-input" name="user-name" id="user-name" type="text" value="$user->name" placeholder="Enter username">
</div>

<div class="form-control">
<label class="form-label" for="user-type">Type</label>
<input class="form-input" name="user-type" id="user-type" type="text" value="$user->type" placeholder="Enter user type">
</div>

<div class="form-control">
<label class="form-label" for="user-email">Email</label>
<input class="form-input" name="user-email" id="user-email" type="text" value="$user->email" placeholder="Enter user email">
</div>

<div class="form-control">
<label class="form-label" for="user-classes">Classes</label>
<input class="form-input" name="user-classes" id="user-classes" type="text" value="$classes" placeholder="Enter user classes">
</div>

<div class="form-control">
<input class="form-button" type="submit" value="Submit & Save Changes">
</div>


</form>
HTML;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Edit Page</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>

<header class="navbar">
	<div class="container display-flex">
		<div class="flex-none">
			<h1>User Admin</h1>
		</div>
		<div class="flex-stretch"></div>
		<div class="nav nav-flex flex-none">
			<ul>
				<li><a href="admin/index.php">User List</a></li>
				<li><a href="admin/forms.php?id=new">Add New User</a></li>
			</ul>
		</div>
	</div>
</header>
		

<div class="container">

	<div class=" card soft">

		<?php

		if(isset($_GET['id'])) {
			showUserPage($_GET['id'] == "new" ? $empty_user : $users[$_GET['id']]);

		} else {

		?>

		<h2>User List</h2>
	
<nav class="nav">
	<ul>
	<?php

		for($i=0;$i<count($users);$i++){
			echo "<li>
			<a href='admin/forms.php?id=$i'>{$users[$i]->name}</a>

			</li>";
		}
	?>
</ul>
</nav>

<?php } ?>
</div>





</div>




</body>
</html>