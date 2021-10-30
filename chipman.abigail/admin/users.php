<?php

include "../lib/php/functions.php";


$users = file_get_json("../data/users.json");



function showUserPage ($user) {
$classes = implode(", ", $user->classes);
echo <<<HTML


<div class="grid">
    <div class="col-xs-12 col-md-3"></div>
    <div class="col-xs-12 col-md-6 card soft">
        <nav class="nav nav-crumbs">
            <ul>
                <li><a href="admin/users.php">Back</a></li>
            </ul>
        </nav>
            <h2>$user->name</h2>
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
            <img src="img/logoColorNav.png" alt="AbbyDazzled Logo" class="logo">
            </div>
            <div class="flex-none"><h2>User Admin</h2></div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="admin/users.php">User List</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="view-window-small" style="background-image:url(lib/img/glitter-background.jpg);">
        <div class="container">
            <div class="grid">
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4"></div>
                <div class="col-xs-12 col-md-4">
                    <div class="card section rainbow">
                        <h2>User Administration</h2>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
        <div class="container">

         
                <?php
                    if(isset($_GET['id'])) {
                        showUserPage($users [$_GET['id']]);
                    } else {
                ?>


            <div class="card soft">

                <h2>User List</h2>
                <nav class="nav">
                    <ul>
                        <?php
                        for($i=0;$i<count($users);$i++){
                            echo "<li>
                            <a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
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