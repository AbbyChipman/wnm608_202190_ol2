<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json("../data/users.json");

print_p ([$_GET,$_POST]);

if(isset($_POST['user-name'])) {
    $users[$_GET['id']]->name = $_POST['user-name'];
    $users[$_GET['id']]->type = $_POST['user-type'];
    $users[$_GET['id']]->email = $_POST['user-email'];
    $users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

    file_put_contents($filename,json_encode($users));
}

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
            <form method="post" action="">
                <div class="form-control">
                    <label for="user-name" class="form-label">Name: </label>
                    <input type="text" class="form-input" size="30" id="user-name" name="user-name" value='$user->name' placeholder='$user->name'>
                </div>
                <div class="form-control">
                    <label for="user-type" class="form-label">Type: </label>
                    <input type="text" class="form-input" size="30" id="user-type" name="user-type" value='$user->type' placeholder='$user->type'>
                </div>
                <div class="form-control">
                    <label for="user-email" class="form-label">Email: </label>
                    <input type="text" class="form-input" size="30" id="user-email" name="user-email" value='$user->email' placeholder='$user->email'>
                </div>
                <div class="form-control">
                    <label for="user-classes" class="form-label">Classes: </label>
                    <input type="text" class="form-input" size="30" id="user-classes" name="user-classes" value='$classes' placeholder='$classes'>
                </div>
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