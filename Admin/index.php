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
    <div class="wrapper">
        <div class="logo">
            <img src="assets/img/logo/logo.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            My Sample
        </div>
        <span class="text-danger" id="msg"></span>
        <div class="p-3 mt-3">
            <div class="col-12 mt-3">
                <input class="form-control" type="email" id="email" placeholder="Email ex:-example@abc.com" />
                
            </div>

            <div class="col-12 mt-3">
                <input class="form-control" type="password" id="password" placeholder="password" />
             
            </div>
            <button class="btn mt-3" onclick="login()">Login</button>
        </div>
        <div class="text-center fs-6">
            <a href="#">Forget password?</a>
        </div>
    </div>

    <script src="assets/js/script.js"></script>

</body>

</html>