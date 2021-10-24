<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Item &ndash; AWesome Stuff</title>
    <?php include "parts/meta.php"; ?>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <div class="container">
        <div class="card-light">
            <h2>Product Item</h2>
            <p>This is item # <?= $_GET['id'] ?></p>
        </div>
    </div>
    
</body>
</html>