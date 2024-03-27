<?php
include_once "../config.php";
include_once "../includes/function.php";
include_once "../includes/route.inc.php";
?>

<head>

    <title>Symox - Admin & Dashboard Template</title>

    <?php include_once '../components/head.php'; ?>

</head>

<?php include '../components/body.php'; ?>

<div class="authentication-bg min-vh-100" style="background: url(../assets/images/auth-bg.jpg) bottom;">
    <div class="bg-overlay bg-light"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="home-wrapper text-center">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-sm-9">
                                <div class="error-img">
                                    <img src="assets/images/404-img.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                    </div>

                    <h4 class="text-uppercase mt-5">Sorry, page not found</h4>
                    <p class="text-muted">It will be as simple as Accidental in fact, it will be Accidental</p>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end authentication section -->

</body>

</html>