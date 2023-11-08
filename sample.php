<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> My Sample - sample</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <link rel="icon" href="assets/img/logo.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- page eke item eka para enna danna one -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- Image Galary -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <!-- Image Galary -->
</head>

<body style="background-color: rgb(32, 32, 32);">

    <div id="home" data-aos="fade-down" data-aos-delay="100">

        <?php

        require "header.php";
        ?>

        <div class="container-fluid">
            <div class="row">


                <div class="col-12" id="sample">
                    <div class="row">

                        <div class="col-12 text-center mt-3 " data-aos="fade-down" data-aos-delay="200">
                            <span class="title_1 ">My Sample</span>

                            <div class="col-10 offset-1">
                                <hr class="text-white" />
                            </div>
                        </div>

                        <div class="container">

                            <div class="portfolio-menu mt-2 mb-4" data-aos="fade-down" data-aos-delay="200">
                                <ul>
                                    <li class="btn btn-outline-light active m-1" data-filter="*">All</li>
                                    <?php

                                    $services = Database::search("SELECT * FROM `services`");
                                    $services_num = $services->num_rows;

                                    for ($i = 0; $i < $services_num; $i++) {
                                        $services_data = $services->fetch_assoc();

                                    ?>
                                        <li class="btn btn-outline-light m-1" data-filter=".<?php echo $services_data["tag"]; ?>"><?php echo $services_data["title"]; ?></li>

                                    <?php
                                    }

                                    ?>

                                </ul>
                            </div>
                            <div class="col-10 offset-1">

                            <div class="portfolio-item row" data-aos="fade-down" data-aos-delay="200">

                                <?php
                                $img = Database::search("SELECT * FROM `sample`");
                                $img_num = $img->num_rows;
                                for ($i = 0; $i < $img_num; $i++) {
                                    $img_data = $img->fetch_assoc();

                                    $category1 = Database::search("SELECT * FROM `services` WHERE `id` ='" . $img_data["service_title"] . "'");
                                    $category1_data = $category1->fetch_assoc();
                                ?>

                                    <div class="item <?php echo $category1_data["tag"]; ?> col-lg-4 col-md-6 col-12 mt-3">
                                        <div class="row m-2">

                                            <div class="col-12 servise justify-content-center">
                                                <div class="m-3">

                                                    <a href="Admin//<?php echo $img_data["img"] ?>" class="fancylight popup-btn ">
                                                        <img class="img-fluid" src="Admin//<?php echo $img_data["img"] ?>">
                                                    </a>

                                                    <a href="Admin//<?php echo $img_data["file_path"] ?>" target="__autoload" class="btn btn-outline-success mt-3">DEMO</a>


                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                <?php
                                }
                                ?>

                            </div>
                            </div>

                        </div>

                    </div>
                </div>



            </div>
        </div>

        <?php
        require "footer.php";
        ?>

    </div>


    <!-- page eke item eka para enna danna one -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- page eke item eka para enna danna one -->
    <script src="assets/js/script.js"></script>

</body>

</html>