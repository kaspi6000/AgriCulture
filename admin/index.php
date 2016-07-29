<?php
    require_once("./header.php");
 ?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">

        <title>Korea Agirculture</title>

        <link rel="stylesheet" href="bootstrap.css">
        <!-- bootstrap.css -->
        <link rel="stylesheet" href="index.css">
        <!-- Custom css -->
        <script src="jquery-1.11.3.js"></script>
        <!-- jquery.js -->
    </head>
    <body>

        <?php getHeader(); ?>

        <!-- <ul class = "menu nav">
            <li class = "first dropdown">
                <a href="#" class = "dropdown-toggle">phase1</a>
                <ul class = "outo">
                    <li><a href="#">step1</a></li>
                    <li><a href="#">step2</a></li>
                    <li><a href="#">step3</a></li>
                </ul>
            </li>
            <li class = "second">
                <a href="#">phase2</a>
            </li>
            <li class = "third">
                <a href="#">phase3</a>
            </li>
        </ul> -->

        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>

        <div class="dropup">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropup
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>

    </body>
</html>
