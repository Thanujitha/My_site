<?php

session_start();

if (isset($_SESSION["mysample"])) {

?>

    <!DOCTYPE html>

    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> My Sample profile</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="icon" href="assets/img/logo/logo.png" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    </head>

    <body>

        <div class="container-fluid">
            <div class="row">

                <h3 class="m-3">
                    <a href="javascript:window.history.back();">Back</a>
                </h3>
                <?php
                require "connection.php";

                $user = Database::search("SELECT * FROM `user`");
                $userd = $user->fetch_assoc();
                ?>

                <div class="col-12 mt-5">
                    <div class="row m-3">

                        <div class="col-lg-6 col-12">

                            <input class="d-none" type="file" accept="img/*" id="profileimg" />
                            <label for="profileimg" onclick="changeImage();">

                                <img src="<?php echo $userd["profile_img"] ?>" class="rounded-circle profile " id="viewimg" />

                            </label>

                        </div>
                        <div class="col-lg-6 col-12">
                            <h2>Discription</h2>
                            <textarea class="form-control" style="height: 300px;" id="Discription"><?php echo $userd["discription"] ?></textarea>
                        </div>

                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="row m-3">

                        <div class="col-lg-6 col-12">
                            <h2>About</h2>
                            <textarea class="form-control" style="height: 300px;" id="About"><?php echo $userd["about"] ?></textarea>
                        </div>

                        <div class="col-lg-6 col-12">
                            <button class="btn btn-primary" onclick="update();">Update</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <script src="assets/js/script.js"></script>

    </body>

    </html>

<?php

} else {
?>
    <script>
        window.location = "index.php";
    </script>
<?php
}
?>