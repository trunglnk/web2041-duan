<?php session_start();
include("function.php")
?>
<!DOCTYPE html>
<html>

<head>
    <title>T - Mobile</title>
    <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'> -->
    <script src="public/js/jquery.min.js"></script>
    <style>
        #register input,
        #login input {
            width: 100%;
            height: 35px;
            border: 1px solid #cdcdcd;
            border-radius: 5px;
        }

        .profile {
            position: relative;
            overflow: hidden;
        }

        .profile:hover {
            overflow: inherit;
        }

        .profiles {
            position: absolute;
            width: 150px;
            top: 20px;
            display: block;
            background-color: #D70018;

        }

        .profiles li a {
            color: white;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .carousel {
            margin-top: 20px;
        }

        .profile a {
            font-size: 14px;
            color: #fff;
        }

        .footer-bottom-cate img{
            height: auto;
            width: 220px;
        }
    </style>
</head>

<body>
<div class="header">
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                     <a href="index.php"><img src="public/images/logo.png" alt=" " style="width: 245px; height: auto;"/></a>
                </div>
                <form action="search.php" method="POST">
                    <div class="search">
                        <input type="text" name="name" required>
                        <input type="submit" value="T??m ki???m" name="search">

                    </div>
                </form>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right">
<!--                 <div class="account"><a href="login.php"><span> </span>T??i kho???n c???a b???n</a></div> <br>-->

                <ul class="login">
                    <?php
                    if (isset($_SESSION['admin'])) { ?>
                        <li class="profile"><a href="#"><?= $_SESSION['admin'] ?></a>
                            <ul class=" profiles">
                                <li><a href="profile.php?email=<?= $_SESSION['admin'] ?>">Th??ng tin</a></li> <br>
                                <li><a href="logout.php" onclick="return alert('B???n ch???c ch???n mu???n ????ng xu???t ch??? ?')">????ng xu???t</a></li>
                            </ul>

                        </li>
                        <?php

                    } elseif (isset($_SESSION['user'])) { ?>
                        <li class="profile"><a href="#"><?= $_SESSION['user'] ?></a>
                            <ul class="profiles">
                                <li><a href="profile.php?name=<?= $_SESSION['user'] ?>">Th??ng tin</a></li> <br>
                                <li><a href="logout.php" onclick="return alert('B???n ch???c ch???n mu???n ????ng xu??? ch??? ?')">????ng xu???t</a></li>
                            </ul>
                        </li>
                        <?php
                    } else { ?>
                        <li><a href="register.php">????ng k??</a></li> |
                        <li><a href="login.php">????ng nh???p</a></li>
                        <?php

                    }
                    ?>

                    <li><a href="contact.php">Li??n h???</a></li>
                </ul>

                <div class="cart" style="float:right"><a href="#"><span> </span>Gi??? h??ng</a></div>
                <?php
                if (isset($_SESSION['admin'])) { ?>
                    <div class="profile" style="float:right"><a href="admin/index.php"> Qu???n tr???</a></div>
                    <?php

                } ?>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>