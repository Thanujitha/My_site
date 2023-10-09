<?php
require "connection.php";
?>


<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/header/style.css" />

</head>

<body>

    <header>
        <div class="overlay">
            <h1 class="title">My Sample</h1>
            <h3 class="p">I'am Thanujitha,</h3>

            <?php
            $user = Database::search("SELECT * FROM `user`");
            $user_d = $user->fetch_assoc();
            ?>

            <div class="col-10 offset-1">
                <p class="p"><?php echo $user_d["discription"] ?></p>

            </div>

            <a href="#home" class="link1">
                <button class="btn btn-outline-light m-1">Home </button>
            </a>

            <a href="#about" class="link1">
                <button class="btn btn-outline-light m-1">About </button>
            </a>

            <a href="#sample" class="link1">
                <button class="btn btn-outline-light m-1">Sample </button>
            </a>

            <a href="#contact" class="link1">
                <button class="btn btn-outline-light m-1">Contact </button>
            </a>


        </div>
    </header>

</body>

</html>