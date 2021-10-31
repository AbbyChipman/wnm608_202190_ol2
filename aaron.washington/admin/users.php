<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");



function showUserPage($user) {
    print_p($user);
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