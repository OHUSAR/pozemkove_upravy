<?php
session_start();
if(! isset($_SESSION['name'])){
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="sk">

<?php include('../functions/content_functions.php') ?>
<?php siteHead('Úvod')?>

<body>
<?php include('html/header.php') ?>
<?php include('html/nav.html') ?>

<div class="container">


    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <?php sectionHeading("Vítame Vás", "v osobnej časti")?>
                <p>
                    Pripravili sme pre Vás ďalšie informácie a podklady nad rámec všeobecne dostupných informácií k pozemkovým úpravám, ktoré budú dostupné len Vám - účastníkom pozemkových úprav, na základe pridelených jedinečných prístupových údajov.
                    <br><br>
                    V prvej časti nájdete informácie o Vašich pozemkoch v obvode JPÚ ZB a DNV. V grafickej časti nájdete zobrazené Vaše pozemky v obvode pozemkových úprav, kde sú vyznačené sektory (projektové bloky) bližšie popísané v časti „o pozemkových úpravách“. V tabuľke nájdete sumárne základné informácie o Vašich pozemkoch (pozemok KN „E“ alebo „C“, druh pozemky, výmera, spoluvlastnícky podiel, výmera spoluvlastníckeho podielu).
                    <br><br>
                    V druhej časti môžete zadávať svoje otázky, dotazy, postrehy priamo prevádzkovateľovi tejto web stránky – spoločnosti Centrop s.r.o., v zastúpení Ing. Pavel Boroš.
                    <br>
                    Rovnako Vám budeme posielať upozornenia na nové informácie ohľadom pozemkových úprav prípadné ďalšie informácie alebo podklady.
                    Veríme, že aj táto nadštandardná forma prispeje k zvýšeniu kvality procesu pozemkových úprav a umožní účastníkom dostávať čo najviac a najpodrobnejších informácií.
                    <br><br>
                    Ing. Pavel Boroš <br>
                    Centrop s.r.o.
                </p>
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



</body>

</html>
