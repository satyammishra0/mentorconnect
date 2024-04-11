<?php
include_once "../config.php";
include_once "../includes/function.php";
include_once "../includes/route.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <?php include_once '../components/head.php'; ?>

    <link href="<?= get_assets() ?>css/home.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <section class="home flex-total-center">

        <div class="login-window grid grid-2">
            <div class="login-window-child login-window-left">
                <a href="">
                    <img src="<?= get_img() ?>content_creator_svg.svg" alt="">
                    <h4>For Creator</h4>
                </a>
            </div>
            <div class="login-window-child login-window-right">
                <a href="">
                    <img src="<?= get_img() ?>content_user_svg.svg" alt="">
                    <h4>For User</h4>
                </a>
            </div>

            <div class="login-form-parent">

            </div>
        </div>
    </section>
</body>

</html>