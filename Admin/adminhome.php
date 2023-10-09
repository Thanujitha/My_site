<?php

session_start();

if (isset($_SESSION["mysample"])) {

?>

    <!DOCTYPE html>

    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> My Sample Admin</title>
        <link rel="stylesheet" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="icon" href="assets/img/logo/logo.png" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    </head>

    <body>

        <div class="col-lg-4 offset-lg-4 col-10 col-lg-1 align-content-center">
            <div class="row m-5 text-center">

                <a href="profile.php" class="btn btn-success mt-3">Profile</a>
                <a href="addSample.php" class="btn btn-success mt-3">Add Sample</a>
                <a href="addlink.php" class="btn btn-success mt-3">link</a>


                <div class="mt-2 form-label">Website visit count:</div>
                <div class="website-counter mt-3 mb-3"></div>
                <button id="reset" class="btn btn-primary">Reset</button>

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