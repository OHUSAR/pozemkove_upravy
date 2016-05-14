<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php siteHead('Úvod')?>

<body>
    <?php include('html/header.html') ?>
    <?php include('html/nav.html') ?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Pozemkové úpravy</small>
                    </h2>
                    <h1 class="brand-name">DNV a ZB</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>od
                            <strong>firmy Centrop</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <?php sectionHeading("Vitajte", "u nás")?>
                    <img class="img-responsive img-border img-left" src="img/centrop_logo.jpg" alt="">
                    <hr class="visible-xs">
                    <p>
                        V časti katastrálneho územia Devínska Nová Ves a v časti katastrálneho územia
                        Záhorská Bystrica prebiehajú v súčasnosti Jednoduché pozemkové úpravy
                        (ďalej v skratke „JPÚ DNV a ZB“). Na tomto webe <b>Vás budeme informovať o 
                        priebehu JPÚ DNV a ZB, aktuálnych informáciách,</b> zdieľať medzi účastníkmi
                        navzájom ich názory, zámery a informácie tak, aby ste mali vždy všetky informácie
                        rýchlo prístupné. Túto stránku zriadil a prevádzkuje navrhovateľ  <b>JPÚ DNV a ZB</b>,
                        nepredstavuje preto oficiálne úradné stanoviská a informácie.
                        <b>Pre úradné informácie prosím kontaktujte správny orgán - Okresný úrad Bratislava,
                        pozemkový a lesný odbor.</b>
                    </p>
                    <p>
                        Navrhovateľom  JPÚ DNV a ZB je spoločnosť Centrop  s.r.o.
                        Spracovateľom projektu JPÚ DNV a ZB je spoločnosť  Geodézia Bratislava a.s.
                        Povoľovacím orgánom JPÚ DNV a ZB je  Okresný úrad Bratislava, Pozemkový a lesný odbor.
                        Kontaktné údaje na uvedené organizácie nájdete v príslušnej časti.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Beautiful boxes
                        <strong>to showcase your content</strong>
                    </h2>
                    <hr>
                    <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php include('html/footer.html') ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
