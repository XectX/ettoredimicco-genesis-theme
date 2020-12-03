<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#">
      <a class="h2 text-light" href="#"><?php bloginfo('name')?></a>
      <!-- <img src="/wp-content/themes/ettoredimicco/assets/brand/lampadina.svg" width="50" height="50">
      <img src="/wp-content/themes/ettoredimicco/assets/brand/logo.svg" width="100" height="50"> -->
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php 
          // creo un'array associativo per il menu
          $args = array('theme_location' => 'primary');
          wp_nav_menu( $args );
      ?>
      <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="/index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Chi sono</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Contatti</a>
        </li>        
      </ul> -->
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>