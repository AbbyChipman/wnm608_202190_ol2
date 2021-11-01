<?php 

include "../lib/php/functions.php";

$file = "../data/users.json";
$users = file_get_json($file);


// file_put_contents, json_encode, explode function, $_POST
// CRUD, Create Read Update Delete


function showUserPage($user) {

$id = $_GET['id'];
//$classes = implode(", ", $user->classes);

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
        <h3>$name</h3>
        <div>
            <strong>Type</strong>
            <span>$user->type</span>
            <span>$type</span>
        </div>
        <div>
            <strong>Email</strong>
            <span>$user->email</span>
        </div>
        <div>
            <strong>Classes</strong>
            <span>$user->classes</span>
        </div>
    </div>
</div>

<div class="col-xs-6">
    <div class="card-light">
        <h3>Edit User</h3>
        <form method="post" action="/aau/wnm608_202190_ol2/aaron.washington/admin/users.php?id=$id?action=updated">
            <div class="form-control">
                <label class="form-label">Name</label>
                <input type="text" class="form-input" value="$user->name" placeholder="Enter User Name" name="formName">
            </div>
            <div class="form-control">
                <label class="form-label">Type</label>
                <input type="text" class="form-input" value="$user->type" placeholder="Enter User Type" name="formType">
            </div>
            <div class="form-control">
                <label class="form-label">Email</label>
                <input type="email" class="form-input" value="$user->email" placeholder="Enter User Email" name="formEmail">
            </div>
            <div class="form-control">
                <label class="form-label">Classes</label>
                <input type="text" class="form-input" value="$user->classes" placeholder="Enter User Classes" name="formClass">
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


if ($_GET['action'] == "updated") {
    // find and use values of input fields
    $name = $_POST['formName'];
    $type = $_POST['formType'];
    $email = $_POST['formEmail'];
    $numbers = explode(",", $_POST['formClass']);

    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }

    if (empty($type)) {
        echo "No type listed";
    } else {
        echo $type;
    }

    if (empty($email)) {
        echo "Need an email";
    } else {
        echo $email;
    }

    if (empty($numbers)) {
        echo "No classes listed";
    } else {
        echo $numbers;
    }

    file_put_contents($file, json_encode($users));
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
        <div class="container display-flex" style="margin-bottom: 0;">
            <div class="flex-none">
                <h5>User Admin</h5>
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