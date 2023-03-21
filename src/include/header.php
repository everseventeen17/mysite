<?php

include ($_SERVER['DOCUMENT_ROOT']).'/src/php/controllers/usersAuth.php';
print_r($_SESSION);
session_abort();
session_unset();




?>
<!-- HEADER -->
<header class="container-fluid header">
  <div class="container">
    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-4">
        <a href="<?php echo BASE_URL; ?>" class="header__logo-text link">MyBlogue</a>
      </div>
      <nav class="header__navigation">
        <ul class="d-flex header__list">
        <li class="header__list-item list-item"><a href="<?php echo BASE_URL; ?>" class="header__link link">Main</a></li>
          <li class="header__list-item list-item">
            <a href="<?php echo BASE_URL. "about.html" ?>" class="header__link link">About us</a>
          </li>
          <li class="header__list-item list-item">
            <a href="#" class="header__link link">More</a>
          </li>
            <li class="header__list-item list-item">
                <a href="/reg/" class="header__link link">Registration</a>
            </li>
<!--          --><?php // if (isset($_SESSION['id'])) : ?>
          <li class="header__list-item header__list-item_login list-item">
            <button type="button" class=" btn header__button">
              <i class="fa-regular fa-user fa-user__header">1</i>
              <?php echo $_SESSION['username'] ?> 
            </button>
            </li>

            <div class="popup popup__user-log">
              <div class="popup__container">
              <a href="" class="header__exit-link link">Profile</a>
              <a href="<?php echo BASE_URL. "./src/php/controllers/logout.php"?>" class="header__exit-link link">Logout</a>
              </div>
            </div>

        

<!--            --><?php //else : ?>
            <li class="header__list-item list-item">
              <a href="/auth/"class="header__link link">
              <i class="fa-regular fa-user fa-user__header"></i>Login
              </a>
            </li>
<!--            --><?php //endif; ?>

            
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
