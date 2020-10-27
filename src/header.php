<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title("title") ?> <?php bloginfo('name')?></title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Source+Sans+Pro:wght@400;700&display=swap"
          rel="stylesheet">
    <script src="js/script.js"></script>

    <?php wp_head(); ?>

</head>

<body>


<?php wp_body(); ?>
<aside>
    <nav>
        <a href="<?php echo bloginfo('url');?>">
            <div class="navLogo">

                <img src=" <?php bloginfo('template_url'); ?>/images/logo.jpg" alt="logo"
                <img class="fermer" src= "<?php bloginfo('template_url'); ?>/images/fermer.svg" alt="fermer">
                <img class="menu" src= "<?php bloginfo('template_url'); ?>/images/menu.svg" alt="menu">
            </div>
        </a>
        <a href="<?php echo bloginfo('url');?>">
            <div class="accueil"><p>Accueil</p></div>
        </a>
        <a href="<?php echo bloginfo('url');?>">
            <div class="camp"><p>Camp</p></div>
        </a>
        <a href="<?php echo bloginfo('url');?>">
            <div class="parc"><p>Parc</p></div>
        </a>
        <a href="<?php echo bloginfo('url');?>">
            <div class="activite"><p>Activités</p></div>
        </a>
        <a href="<?php echo bloginfo('url');?>">
            <div class="location"><p>Location</p></div>
        </a>
        <a href="<?php echo bloginfo('url');?>">
            <div class="emplois"><p>Emploie</p></div>
        </a>
        <a href="<?php echo bloginfo('url');?>">
            <div class="contact"><p>Contact</p></div>
        </a>
        <div class="divLangue">
            <div><a class="navPositionA" href=""><img src= "<?php bloginfo('template_url'); ?>/images/FbVert.png" alt="FbVert"></a></div>
            <div class="langue">
                <a href=""><p>En</p></a>
                <a href=""><p>Fr</p></a>
            </div>
        </div>
    </nav>
</aside>





