<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Colonie des Grèves</title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Source+Sans+Pro:wght@400;700&display=swap"
          rel="stylesheet">
    <script src="js/script.js"></script>

</head>
<body>

<aside>
    <div class="navLogo">

        <img class="pasDeClass" src=" <?php bloginfo('template_url'); ?>/images/logo.jpg" alt="logo"
        <img class="fermer" src="<?php bloginfo('template_url'); ?>/images/fermer.svg" alt="fermer">
        <img class="fermer" src="<?php bloginfo('template_url'); ?>/images/menu.svg" alt="menu">
    </div>




        <?php wp_nav_menu( array(
            'theme_location'  => 'menu_principal',
            'container' => 'nav'
        )); ?>







</aside>




