<?php

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");



function showUserPage ($user) {
$classes = implode(", ", $user->classes);
echo <<<HTML


<nav class="nav nav-crumbs">
    <ul>
        <li><a href="admin/users.php">Back</a></li>
    </ul>
</nav>

<div class="grid">
    <div class="col-xs-12 col-md-3"></div>
    <div class="col-xs-12 col-md-6 card soft light">
    <h2>$user->name</h2>
        <div>
            <form action="">
                <label for="name" class="form-label">Name: </label>
                <input type="text" class="form-input" size="30" id="name" placeholder='$user->name'>
                <br>
                <label for="type" class="form-label">Type: </label>
                <input type="text" class="form-input" size="30" id="type" placeholder='$user->type'>
                <br>
                <label for="email" class="form-label">Email: </label>
                <input type="text" class="form-input" size="30" id="email" placeholder='$user->email'>
                <br>
                <label for="classes" class="form-label">Classes: </label>
                <input type="text" class="form-input" size="30" id="classes" placeholder='$classes'>
                <br>
                <br>
                <input type="submit" class="form-button" value=
                "Update Information">
            </form>
        </div>
    <div class="col-xs-12 col-md-3"></div>
</div>
HTML;
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../parts/meta.php" ?>

    <title>Users Admin Page</title>
</head>
<body>
    <header class="navbar">
        <div class="container display-flex flex-align-center">
            <div class="flex-none">
                <h2>User Admin</h2>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="admin/users.php">User List</a></li>
                </ul>
            </nav>
        </div>
    </header>

        <div class="container">

            <div class="card soft">
                <?php
                    if(isset($_GET['id'])) {
                        showUserPage($users [$_GET['id']]);
                    } else {
                ?>
            </div>

        
                <?php } ?>
        </div>
</body>
</html>