<footer class="bg-dark text-white pb-4 pt-4">

    <div class="text-center" data-aos="fade-down" data-aos-delay="250">

        <div class="col-12" >

            <script>
                document.write(new Date().getFullYear())
            </script> &copy; My Sample All righs Reserverd
        </div>

        <ul class="list-unstyled list-inline mt-3" >

            <?php

            $contact_us = Database::search("SELECT * FROM `contact_us`");
            $contact_us_num = $contact_us->num_rows;
            for ($i = 0; $i < $contact_us_num; $i++) {
                $contact_us_data = $contact_us->fetch_assoc();

            ?>
                <li class="list-inline-item ">
                    <a href="<?php echo $contact_us_data["link"]; ?>" class="form-floating btn-sm text-white">
                        <i class="<?php echo $contact_us_data["icon"]; ?> iconf" style="font-size: 20px;"></i>
                    </a>
                </li>

            <?php
            }
            ?>
        </ul>

        <div class="col-12">
            <div class="text-sm-end mx-3">
                Crafted with <i class="bi bi-heart-fill"></i> by Thanujitha <a href="Admin/index.php" class="link1"> Dilshan</a>
            </div>
        </div>
    </div>

</footer>