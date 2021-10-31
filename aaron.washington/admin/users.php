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

<div class="grid gap">

<div class="col-xs-6">
    <div class="card-light" style="text-align: left;">
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
</div>

<div class="col-xs-6">
    <div class="card-light">
        <h3>Edit User</h3>
        <form>
            <div class="form-control">
                <label class="form-label">Name</label>
                <input type="text" class="form-input" value="$user->name" placeholder="Enter User Name">
            </div>
            <div class="form-control">
                <label class="form-label">Type</label>
                <input type="text" class="form-input" value="$user->type" placeholder="Enter User Type">
            </div>
            <div class="form-control">
                <label class="form-label">Email</label>
                <input type="email" class="form-input" value="$user->email" placeholder="Enter User Email">
            </div>
            <div class="form-control">
                <label class="form-label">Classes</label>
                <input type="text" class="form-input" value="$classes" placeholder="Enter User Classes">
            </div>
            <div class="form-control">
                <input type="submit" class="form-button form-control" value="Save Changes">
            </div>
        </form>
    </div>
</div>

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
                            <a href='admin/users.php?id=$i' style='padding-left: 0;'>{$users[$i]->name}</a>
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