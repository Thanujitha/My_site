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

        <title> My Sample add Link</title>
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


                <div class="col-6 offset-3">
                    <div class="row">
                        <div class="col-12">
                            <h3>Contact By</h3>
                        </div>

                        <?php

                        $contact = Database::search("SELECT * FROM `contact_us`");
                        $contact_num = $contact->num_rows;

                        for ($i = 0; $i < $contact_num; $i++) {
                            $contact_data = $contact->fetch_assoc();
                        ?>

                            <div class="col-12 mt-4">
                                <div class="row">

                                    <div class="col-4">
                                        <span class="form-label"><?php echo $contact_data["name"]; ?></span>
                                    </div>
                                    <div class="col-6 ">
                                        <input type="text" class="form-control " placeholder="Add link" value="<?php echo $contact_data["link"]; ?>" id="link<?php echo $contact_data["id"]; ?>" />
                                    </div>
                                    <div class="col-2 ">
                                        <button class="btn btn-success" onclick="AddContactLink(<?php echo $contact_data['id']; ?>);">Add link</button>
                                    </div>

                                </div>
                            </div>

                        <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="col-6 offset-3 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <h3>Order By</h3>
                        </div>

                        <?php

                        $order_by = Database::search("SELECT * FROM `order_by`");
                        $order_by_num = $order_by->num_rows;

                        for ($i = 0; $i < $order_by_num; $i++) {
                            $order_by_data = $order_by->fetch_assoc();
                        ?>

                            <div class="col-12 mt-4">
                                <div class="row">

                                    <div class="col-4">
                                        <span class="form-label"><?php echo $order_by_data["name"]; ?></span>
                                    </div>
                                    <div class="col-6 ">
                                        <input type="text" class="form-control " placeholder="Add link" value="<?php echo $order_by_data["link"]; ?>" id="Oederlink<?php echo $order_by_data["id"]; ?>" />
                                    </div>
                                    <div class="col-2 ">
                                        <button class="btn btn-success" onclick="AddOrderLink(<?php echo $order_by_data['id']; ?>);">Add link</button>
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