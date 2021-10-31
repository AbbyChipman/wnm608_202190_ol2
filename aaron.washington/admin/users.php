<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


// file_put_contents, json_encode, explode function, $_POST
// CRUD, Create Read Update Delete


function showUserPage($user) {

$classes = implode(", ", $user->classes);

//heredoc, last line MUST be completely on the left
echo <<<HTML
<nav class="nav nav-crumbs">
    <ul>
        <li><a href="admin/users.php">Back</a></li>
    </ul>
</nav>
<div>
    <h3>$user->name</h3>
    <div>
        <strong>Type</strong>
        <span>$user->type</span>
    </div>
    <div>
        <strong>Email</strong>
        <span>$user->email</span>
    </div>
    <div>
        <strong>Classes</strong>
        <span>$classes</span>
    </div>
</div>
<div class="card-light">
    <h3>$user->name</h3>
    <form>
        <div class="form-control">
            <label class="form-label">Example</label>
            <input type="text" class="form-input" placeholder="Text">
        </div>
        <div class="form-control">
            <label class="form-label">Example</label>
            <input type="number" class="form-input" placeholder="Number">
        </div>
        <div class="form-control">
            <label class="form-label">Example</label>
            <input type="password" class="form-input" placeholder="Password">
        </div>
        <div class="form-control grid gap">
            <div class="col-xs-12 col-md-6">
                <label class="form-label">Example</label>
                <input type="search" class="form-input" placeholder="Search">
            </div>
            <div class="col-xs-12 col-md-6">
                <label class="form-label">Example</label>
                <input type="search" class="form-input" placeholder="Search">
            </div>
        </div>
    </form>
</div>
HTML;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Admin Page</title>
    <?php include "../parts/meta.php"; ?>
</head>
<body>

    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <h4>User Admin</h4>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="admin/users.php">User List</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container" style="padding-top: 3rem;">
        <div class="card-light" style="text-align: left;">
            <?php

            if(isset($_GET['id'])) {
                showUserPage($users[$_GET['id']]);
            } else {

            ?>

            <h3>User List</h3>

            <nav class="nav">
                <ul style="padding-left: 0;">

                    <?php 
                    
                    for($i=0;$i<count($users);$i++){
                        echo "<li class='form-control'>
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