<?php
require ('Script.php');
$class=new Script();
$result=$class->subdomainArr();
$team=$class->team();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <meta charset="UTF-8">
    <html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Microapi - Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/css/line-awesome.css">
    <link rel="stylesheet" href="assets/vendor/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-custom.css">
    <link rel="stylesheet" href="assets/css/theme.css">

    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</head>
<body>
    <nav class="nav-wrap bg-dark fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark px-lg-0">
                <a class="navbar-brand mr-3 swap-link" href="index.php">Microapi <span class="text-light font-weight-bold">Services</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item swap-link"> <a href="index.html" class="nav-link">Home</a> </li>
                        <li class="nav-item swap-link"> <a href="pricing.html" class="nav-link">API</a> </li>
                        <li class="nav-item swap-link"> <a href="pricing.html" class="nav-link">Documentation</a> </li>
                        <li class="nav-item swap-link"> <a href="Team.php" class="nav-link">Our Team</a> </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link no-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="las la-user mr-2" style="font-size:22px;"></i></a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary swap-link text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Sign up</a>
                            </li>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
