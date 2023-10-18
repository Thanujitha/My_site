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

<body style="background-color: rgb(32, 32, 32);">

    <div id="home" data-aos="fade-down" data-aos-delay="100">

        <?php

        require "header.php";

        $user = Database::search("SELECT * FROM `user` ");
        $user_d = $user->fetch_assoc();

        ?>

        <div class="container-fluid">
            <div class="row">
                

                <div class="col-12" id="Services">
                    <div class="row">

                        <div class="col-12 text-center mt-3 " data-aos="fade-down" data-aos-delay="200">
                            <span class="title_1 ">My Services</span>

                            <div class="col-10 offset-1">
                                <hr class="text-white" />
                            </div>
                        </div>

                        <?php

                        $Servic = Database::search("SELECT * FROM `services`");
                        $Servic_num = $Servic->num_rows;
                        for ($i = 0; $i < $Servic_num; $i++) {
                            $servic_data = $Servic->fetch_assoc();

                        ?>

                            <div class="col-12 col-sm-6 col-lg-4 mt-3 text-center " data-aos="fade-down" data-aos-delay="200">
                                <div class="row m-lg-4 m-2">

                                    <div class="servise">
                                        <div class="col-12 m-2 mt-3">
                                            <img src="<?php echo $servic_data["icon"]; ?>" class="imgMain ">
                                        </div>

                                        <div class="col-12">
                                            <span class="text-white h4"><?php echo $servic_data["title"]; ?></span>
                                        </div>
                                        <div class="col-12 mt-2 mb-3">
                                            <span class="text-white-50"><?php echo $servic_data["dis"]; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="col-12" id="Skills">
                    <div class="row">

                        <div class="col-12 text-center mt-3 " data-aos="fade-down" data-aos-delay="200">
                            <span class="title_1 ">My Skills</span>

                            <div class="col-10 offset-1">
                                <hr class="text-white" />
                            </div>
                        </div>

                        <?php

                        $skills = Database::search("SELECT * FROM `skills`");
                        $skills_num = $skills->num_rows;
                        for ($i = 0; $i < $skills_num; $i++) {
                            $skills_data = $skills->fetch_assoc();

                        ?>

                            <div class="col-12 col-sm-6 col-lg-4 mt-1" data-aos="fade-down" data-aos-delay="200">
                                <div class="row m-lg-4 m-2">

                                    <div class="col-12">
                                        <span class="text-white h4"><?php echo $skills_data["name"]; ?></span>
                                    </div>

                                    <div class="col-11 offset-1 mt-2 mb-3">
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar <?php echo $skills_data["colore"]; ?>" style="width: <?php echo $skills_data["marks"]; ?>%"><?php echo $skills_data["marks"]; ?>%</div>
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