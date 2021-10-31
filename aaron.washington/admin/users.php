<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");


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
                <h1>User Admin</h1>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-flex flex-none">
                <ul>
                    <li><a href="users.php">User List</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="card-light">
            <h2>Users</h2>

            <?php 
            
            for($i=0;$i<count($users);$i++){
                echo "<li>
                    <strong>{$users[$i]->name}</strong>
                    <span>{$users[$i]->type}</span>
                </li>";
            }
            
            ?>
        </div>
    </div>
    
</body>
</html>