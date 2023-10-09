<?php

session_start();
require "connection.php";

if (isset($_SESSION["mysample"])) {

?>

    <!DOCTYPE html>

    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> My Sample Add sample</title>
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

                <div class="col-12 justify-content-center">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row m-3">
                                <h3 class="form-label">Add sample</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 offset-lg-1 col-12">
                            <div class="row">

                                <input class="d-none" type="file" accept="img/*" id="profileimg" />
                                <label for="profileimg" onclick="changeImage();">

                                    <img src="assets/img/Upload-icon.png" class="profile" id="viewimg" />

                                </label>
                            </div>
                        </div>


                        <div class="col-12 col-lg-4">
                            <div class="row">
                                <?php

                                $category = Database::search("SELECT * FROM `design_category`");
                                $c_num = $category->num_rows;
                                ?>
                                <select class="form-select form-label" id="cid">
                                    <option class="form-label" value="0">Select</option>
                                    <?php
                                    for ($i = 0; $i < $c_num; $i++) {
                                        $c_data = $category->fetch_assoc();
                                    ?>
                                        <option class="form-label" value="<?php echo $c_data["id"] ?>"><?php echo $c_data["name"] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <input type="file" accept="file/*" id="fileUpload" multiple class="form-select mt-3 mb-3 " />
                                
                                <button class="btn btn-success" onclick="UploadSample();">Upload</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 mt-5">
                    <div class="row m-3">

                        <div class="portfolio-item row" data-aos="fade-down" data-aos-delay="200">

                            <?php
                            $img = Database::search("SELECT * FROM `sample`");
                            $img_num = $img->num_rows;
                            for ($i = 0; $i < $img_num; $i++) {
                                $img_data = $img->fetch_assoc();

                                $category1 = Database::search("SELECT * FROM `design_category` WHERE `id` ='" . $img_data["design_category_id"] . "'");
                                $category1_data = $category1->fetch_assoc();
                            ?>

                                <div class="item <?php echo $category1_data["name"]; ?> col-lg-3 col-md-4 col-6 col-sm">
                                    <img class="img-fluid" src="<?php echo $img_data["img"] ?>">
                                    <button class="btn btn-danger" onclick="DeleteSample(<?php echo $img_data['id'] ?>);">Delete</button>
                                </div>

                            <?php
                            }
                            ?>

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