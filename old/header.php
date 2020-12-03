<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset=<?php bloginfo( 'charset' );?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- wp_head -->
    <!-- nel caricare la wp_head, carico anche tutte le librerie che servono al mio tema -->
    <?php wp_head(); ?>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="wp-content/themes/Lab4Life/assets/css/bootstrap.min.css"> -->
    <title><?php bloginfo( 'name' ) ?></title>
  </head>
  <body>
    <header>
      <!-- <div class="main">
        <h1><?php bloginfo( 'description' ); ?></h1>
      </div> -->
    </header>
    <!-- inserisco il menù nello header -->
    <?php include("nav.php"); ?>
    <!-- <nav class='navbar navbar-expand-lg navbar-light bg-dark'>
      <div class='container'>
        <!-- devo richiamare le voci di menù -->
        <!-- mi ricordo che ho creato un array di menù nella function.php -->
        <?php 
          // creo un'array associativo per il menu
          $args = array('theme_location' => 'primary');
          wp_nav_menu( $args );
        ?>
        <!-- nota : le pagine possono avere un tema separato, non sono come un qualunque post di blog -->
      </div>
    </nav> -->
