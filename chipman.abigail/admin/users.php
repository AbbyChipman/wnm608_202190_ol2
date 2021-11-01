<?php

include "../lib/php/functions.php";

$filename = "../data/users.json";
$users = file_get_json("../data/users.json");

$empty_user = (object)[
    "name"=>"",
    "type"=>"",
    "email"=>"",
    "classes"=>[]
];

// print_p ([$_GET,$_POST]);

if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case "update":
            $users[$_GET['id']]->name = $_POST['user-name'];
            $users[$_GET['id']]->type = $_POST['user-type'];
            $users[$_GET['id']]->email = $_POST['user-email'];
            $users[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);
        
            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
        case "create":
            $empty_user->name = $_POST['user-name'];
            $empty_user->type = $_POST['user-type'];
            $empty_user->email = $_POST['user-email'];
            $empty_user->classes = explode(", ", $_POST['user-classes']);

            $id = count($users);

            $users[] = $empty_user;
        
            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}?id=$id");
            break;
        case "delete":
            array_splice($users,$_GET['id'],1);
            file_put_contents($filename,json_encode($users));
            header("location:{$_SERVER['PHP_SELF']}");
            break;
    }
}


function showUserPage ($user) {

$id = $_GET['id'];
$addoredit = $id == "new" ? "Add" : "Edit";
$createorupdate = $id == "new" ? "create" : "update";
$classes = implode(", ", $user->classes);

$display = <<<HTML
<div>
    <h2>$user->name</h2>
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
HTML;

$form = <<<HTML
<div class="grid gap">
    <div class="col-xs-12 col-md-3"></div>
    <div class="col-xs-12 col-md-6">
        <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
        <h2>$addoredit User</h2>
            <div class="form-control">
                <label for="user-name" class="form-label">Name: </label>
                <input type="text" class="form-input" size="30" id="user-name" name="user-name" value='$user->name' placeholder='First & Last Name'>
            </div>
            <div class="form-control">
                <label for="user-type" class="form-label">Type: </label>
                <input type="text" class="form-input" size="30" id="user-type" name="user-type" value='$user->type' placeholder='Teacher, Student, Etc.'>
            </div>
            <div class="form-control">
                <label for="user-email" class="form-label">Email: </label>
                <input type="text" class="form-input" size="30" id="user-email" name="user-email" value='$user->email' placeholder='user@email.com'>
            </div>
            <div class="form-control">
                <label for="user-classes" class="form-label">Classes: </label>
                <input type="text" class="form-input" size="30" id="user-classes" name="user-classes" value='$classes' placeholder='class numbers separated by commas'>
            </div>
            <br>
            <input type="submit" class="form-button" value=
            "Save Changes">
        </form>
    </div>
    <div class="col-xs-12 col-md-3"></div>
</div>
HTML;

$output = $id == "new" ? $form :
    "<div class='grid'>
        <div class='col-xs-12 col-md-1'></div>
        <div class='col-xs-12 col-md-4'>$display</div>
        <div class='col-xs-12 col-md-7'>$form</div>
    </div>
    ";

$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

echo <<<HTML
<div class="card soft">
    <nav class="nav display-flex">
        <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}">Back</a></div>
        <div class="flex-stretch"></div>
        <div class="flex-none">$delete</div>
    </nav>
    $output
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
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">User List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
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
                            showUserPage($_GET['id'] == "new" ? $empty_user : $users [$_GET['id']]);
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