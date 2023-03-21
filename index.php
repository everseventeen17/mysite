<?php


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- index CSS -->
    <link rel="stylesheet" href="./src/pages/index.css">
    <!-- all ICONS -->
    <script src="https://kit.fontawesome.com/fa8a90309e.js" crossorigin="anonymous"></script>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="page">

<!-- HEADER -->
<?php
include ($_SERVER['DOCUMENT_ROOT']) . '/src/include/header.php';


?>
<main class="main container-fluid">


    <!-- SLIDER -->
    <div class="slider">
        <div class="slider-item">
            <img src="./src/images/main/slider_1/1.jpg" class="slider-item__img" alt="image">
            <div class="slider-item__sqare d-flex justify-content-center align-items-center">
                <p class="slider-item__text">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="slider-item">
            <img src="./src/images/main/slider_1/2.jpg" class="slider-item__img" alt="image">
            <div class="slider-item__sqare d-flex justify-content-center align-items-center">
                <p class="slider-item__text">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="slider-item">
            <img src="./src/images/main/slider_1/3.jpg" class="slider-item__img" alt="image">
            <div class="slider-item__sqare d-flex justify-content-center align-items-center">
                <p class="slider-item__text">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="slider-item">
            <img src="./src/images/main/slider_1/4.jpg" class="slider-item__img" alt="image">
            <div class="slider-item__sqare d-flex justify-content-center align-items-center">
                <p class="slider-item__text">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>

</main>

<!-- POSTS -->
<div class="posts">
    <div class="container">

        <h1 class="posts__title">Last news</h1>

        <div class="row">
            <div class="element-container col-md-8">

                <template id="element-template" class="template">

                    <div class="element">
                        <div class="element post row row-cols-1 row-cols-sm-2 row-cols-md-4">
                            <div class="col post__img-wrapper">
                                <img src="./src//images/main/posts/1.jpg" alt="image" class="post__img">
                            </div>
                            <div class="col post__text-wrapper">
                                <h3 class="post__title">Title Lorem ipsum dolor sit, amet consectetur adipisicing
                                    elit.</h3>
                                <i class="post_userName fa-regular fa-user fa-user__post"> Michael Urich</i>
                                <i class="fa-regular fa-clock fa-clock__post"> 03.03.2021</i>
                                <p class="post__text text-start">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Odit accusantium expedita culpa molestiae error voluptas beatae repellendus
                                    temporibus tempora debitis? Ut omnis minima dignissimos! Assumenda facilis eaque
                                    laborum unde.</p>
                            </div>
                        </div>
                    </div>

                </template>

                <div class=" post row row-cols-1 row-cols-sm-2 row-cols-md-4">
                    <div class="col post__img-wrapper">
                        <img src="./src//images/main/posts/2.jpg" alt="image" class="post__img">
                    </div>
                    <div class="col post__text-wrapper">
                        <h3 class="post__title">Title Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h3>
                        <i class="fa-regular fa-user fa-user__post"> John Doe</i>
                        <i class="fa-regular fa-clock fa-clock__post"> 11.02.2020</i>
                        <p class="post__text text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Odit accusantium expedita culpa molestiae error voluptas beatae repellendus
                            temporibus tempora debitis? Ut omnis minima dignissimos! Assumenda facilis eaque
                            laborum unde.</p>
                    </div>
                </div>

            </div>

            <!-- SIDEBAR -->
            <div class="col-12 col-md-4">
                <div class="sidebar">
                    <div class="sidebar__wrapper">
                        <h4 class="sidebar__title">Search</h4>
                        <form class="sidebar__form form-inline d-flex
               active-pink-3 active-pink-4 d-flex">
                            <i class="fas fa-search active" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                                   aria-label="Search">
                        </form>
                    </div>
                    <div class="sidebar__wrapper sidebar__wrapper_content">
                        <h1 class="sidebar__title">Category</h1>
                        <ul class="sidebar__list">
                            <li class="sidebar__list-item list-item">
                                <a href="#" class="sidebar__link link">Programming</a>
                            </li>
                            <li class="sidebar__list-item list-item">
                                <a href="#" class="sidebar__link link">Design</a>
                            </li>
                            <li class="sidebar__list-item list-item">
                                <a href="#" class="sidebar__link link">Motivation</a>
                            </li>
                            <li class="sidebar__list-item list-item">
                                <a href="#" class="sidebar__link link">Case</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<!--FOOTER-->
<?php
include ($_SERVER['DOCUMENT_ROOT']) . '/src/include/footer.php';
?>
<!---->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<!-- Slick slider -->
<script src="./src/utils/slick-1.8.1/slick/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="./src/utils/slick-1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="./src/utils/slick-1.8.1/slick/slick-theme.css"/>
<!-- JQ file -->

<script type="module" src="src/pages/utils/slider.js"></script>
<script type="module" src="./src/pages/index.js"></script>

</body>

</html>