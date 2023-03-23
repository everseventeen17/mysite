<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- index CSS -->
    <link rel="stylesheet" href="../src/pages/index.css">
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
<!---->

<main class="main">
    <div class="container-fluid">
        <div class="container">

            <p class="form__success-text text-center mt-3"></p>
            <form name="registration_form" novalidate
                  class="form__registration d-flex flex-column align-items-center" method="POST">
                <h2 class="form__title">Registration form</h2>
                <p class="form__erorr-text_top"></p>
                <!-- Name input -->
                <div class="form-group mb-3 col-12 col-md-4">
                    <label class="form-label" for="form4Example1">Name</label>
                    <input name="name" type="text" id="form4Example1" class="form__input-text form__input_name form-control"
                           value="" placeholder="Enter name" required minlength="2" maxlength="40"/>
                    <span class="form__erorr-text form__erorr-text_name">1</span>
                </div>
                <!-- Email input -->
                <div class="form-group mb-3 col-12 col-md-4">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form__input-text form__input-text_email form-control"
                           value="" id="exampleInputEmail" aria-describedby="emailHelp"
                           placeholder="Enter email" required minlength="2" maxlength="40">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                    <span class="form__erorr-text form__erorr-text_email">1</span>
                </div>
                <!-- Password input -->
                <div class="form-group mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password"
                           class="form__input-text_password form__input-text form-control"
                           required minlength="2" id="exampleInputPassword1" placeholder="Password">
                    <span class="form__erorr-text form__erorr-text_password">1</span>
                </div>
                <!-- Password input -->
                <div class="form-group mb-3 col-12 col-md-4">
                    <label for="exampleInputPassword1">Repeat password</label>
                    <input name="secondPassword" type="password"
                           class="form__input-text_secondPassword form__input-text form-control"
                           required minlength="2" id="exampleInputPassword2" placeholder="Password">
                    <span class="form__erorr-text form__erorr-text_secondPassword">1</span>
                </div>
                <!-- Submit button -->
                <p class="form__success-text"></p>
                <button name="button_reg" type="submit" class="form__submit-btn btn mb-3 col-12 col-md-4">Registration
                </button>
                <a href="<?php echo BASE_URL . "auth.php" ?>" class="form__link form__link_auth link">Sign in</a>
                <p class="form__error-text text-center mt-3"></p>
            </form>

        </div>

    </div>
</main>

<!--FOOTER-->
<?php
include ($_SERVER['DOCUMENT_ROOT']) . '/src/include/footer.php';
?>
<!---->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.js" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<!-- Slick slider -->

<!-- JQ file -->

<script type="module" src="../src/pages/registration.js"></script>

</body>

</html>
