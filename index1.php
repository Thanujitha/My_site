<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> My Sample </title>
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

<body>

    <div id="home" data-aos="fade-down" data-aos-delay="100">

        <?php

        require "header.php";

        $user = Database::search("SELECT * FROM `user` ");
        $user_d = $user->fetch_assoc();

        ?>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-12" id="about">
                <div class="row">

                    <div class="col-12 text-center mt-3 " data-aos="fade-down" data-aos-delay="200">
                        <span class="title_1 ">About</span>

                        <div class="col-10 offset-1">
                            <hr class="text-black-50 " />
                        </div>
                    </div>


                    <div class="col-12 col-md-6 mt-3" data-aos="fade-down" data-aos-delay="300">
                        <div class="row">

                            <div class="text-center">
                                <img src="Admin//<?php echo $user_d["profile_img"] ?>" class="rounded-circle profile " />
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-6 mt-3">
                        <div class="row">

                            <div class="text-center fst-italic mt-5" data-aos="fade-down" data-aos-delay="400">
                                <p class="text-black-50"><i class="bi bi-quote h3 text-success"></i><?php echo $user_d["about"] ?></p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


            <div class="col-12" id="sample">
                <div class="row mt-2">

                    <div class="col-10 offset-1 bg-light mt-3 mb-3 text-center">
                        <div class="row m-3 ">


                            <div class="col-12 text-center " data-aos="fade-down" data-aos-delay="200">
                                <span class="title_1 ">My Sample Design</span>

                                <div class="col-10 offset-1">
                                    <hr class="text-black-50 " />
                                </div>
                            </div>

                            <?php

                           

                            ?>

                            <div class="container">

                                <div class="portfolio-menu mt-2 mb-4" data-aos="fade-down" data-aos-delay="200">
                                    <ul>
                                        <li class="btn btn-outline-dark active m-1" data-filter="*">All </li>
                                        <?php

                                        for ($i = 0; $i < $category_num; $i++) {
                                            $category_data = $category->fetch_assoc();

                                        ?>
                                            <li class="btn btn-outline-dark m-1" data-filter=".<?php echo $category_data["name"]; ?>"><?php echo $category_data["name"]; ?></li>

                                        <?php
                                        }

                                        ?>

                                    </ul>
                                </div>
                                <div class="portfolio-item row" data-aos="fade-down" data-aos-delay="200">

                                    <?php
                                    $img = Database::search("SELECT * FROM `sample`");
                                    $img_num = $img->num_rows;
                                    for ($i = 0; $i < $img_num; $i++) {
                                        $img_data = $img->fetch_assoc();

                                        $category1 = Database::search("SELECT * FROM `design_category` WHERE `id` ='" . $img_data["design_category_id"] . "'");
                                        $category1_data = $category1->fetch_assoc();
                                    ?>

                                        <div class="item <?php echo $category1_data["name"]; ?> col-lg-4 col-md-6 col-12 mt-3">
                                            <div class="row m-2">

                                                <div class="col-12 sampleDiv justify-content-center">
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


            <div class="col-12" id="contact">
                <div class="row mt-2">

                    <div class="col-8 offset-2 mt-3 mb-4 text-center shadow">
                        <div class="row m-3 ">

                            <div class="col-12 text-center ">
                                <span class="title_1 ">Contact</span>

                                <div class="col-10 offset-1">
                                    <hr class="text-black-50 " />
                                </div>
                            </div>

                            <div class="col-12 mt-2">
                                <span class="form-label h4 text-black-50">Contact us</span>
                            </div>


                            <div class="col-12 text-center mt-3">
                                <div class="wrapper">
                                    <?php
                                    $contact_us = Database::search("SELECT * FROM `contact_us`");
                                    $Facebook = "#";
                                    $Twitter = "#";
                                    $whatsapp = "#";
                                    $linkedin = "#";
                                    $YouTube = "#";

                                    if ($contact_us->num_rows != 0) {
                                        $contact_us_d = $contact_us->fetch_assoc();
                                        if ($contact_us_d["name"] = "Facebook") {
                                            $Facebook = $contact_us_d["link"];
                                        }
                                        if ($contact_us_d["name"] = "Twitter") {

                                            $Twitter = $contact_us_d["link"];
                                        }
                                        if ($contact_us_d["name"] = "whatsapp") {
                                            $whatsapp = $contact_us_d["link"];
                                        }
                                        if ($contact_us_d["name"] = "linkedin") {

                                            $linkedin = $contact_us_d["link"];
                                        }
                                        if ($contact_us_d["name"] = "YouTube") {
                                            $YouTube = $contact_us_d["link"];
                                        }
                                    }
                                    ?>
                                    <a href="<?php echo $Facebook; ?>" class="button form-floating text-dark link1">
                                        <div class="icon">
                                            <i class="bi bi-facebook h1"></i>
                                        </div>
                                        <span>Facebook</span>
                                    </a>
                                    <a href="<?php echo $Twitter; ?>" class="button form-floating text-dark link1">
                                        <div class="icon">
                                            <i class="bi bi-twitter"></i>
                                        </div>
                                        <span>Twitter</span>
                                    </a>
                                    <a href="<?php echo $whatsapp; ?>" class="button form-floating text-dark link1">
                                        <div class="icon">
                                            <i class="bi bi-whatsapp"></i>
                                        </div>
                                        <span>whatsapp</span>
                                    </a>
                                    <a href="<?php echo $linkedin; ?>" class="button form-floating text-dark link1">
                                        <div class="icon">
                                            <i class="bi bi-linkedin"></i>
                                        </div>
                                        <span>linkedin</span>
                                    </a>
                                    <a href="<?php echo $YouTube; ?>" class="button form-floating text-dark link1">
                                        <div class="icon">
                                            <i class="bi bi-youtube"></i>
                                        </div>
                                        <span>YouTube</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <span class="form-label h4 text-black-50">Order by</span>
                            </div>
                            <?php
                            $order_us = Database::search("SELECT * FROM `order_by`");
                            $Fiver = "#";
                            $Upwork = "#";

                            if ($order_us->num_rows != 0) {
                                $order_us_d = $order_us->fetch_assoc();
                                if ($order_us_d["name"] = "Fiver") {
                                    $Fiver = $order_us_d["link"];
                                }
                                if ($order_us_d["name"] = "Upwork") {

                                    $Upwork = $order_us_d["link"];
                                }
                            }
                            ?>
                            <div class="col-12 text-center mt-3 mb-2">
                                <div class=" wrapper_order">
                                    <a href="<?php echo $Fiver; ?>" class="button form-floating text-dark link1">
                                        <div class="icon iconfiver">
                                            <img src="assets/img/icon/fiver.png" class="bi OrderByIcon" />
                                        </div>
                                        <span class="spanOrder">Fiver</span>
                                    </a>

                                    <a href="<?php echo $Upwork; ?>" class="button form-floating text-dark link1">
                                        <div class="icon iconfiver">
                                            <img src="assets/img/icon/upwork.png" class="bi OrderByIcon" />
                                        </div>
                                        <span class="spanOrder">Upwork</span>
                                    </a>

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
    </div>

    <!-- page eke item eka para enna danna one -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- page eke item eka para enna danna one -->
    <script src="assets/js/script.js"></script>
</body>

</html>