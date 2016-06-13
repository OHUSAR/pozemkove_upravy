<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/login_functions.php') ?>
<?php include('functions/article_functions.php') ?>
<?php siteHead('Kontakt')?>

<body>
    <?php include('html/header.html') ?>
    <?php include('html/nav.html') ?>

    <div class="container">
        <div class="row" id="content">
            <div class="box">
                <?php tabbedContactNav(1); ?>
                <?php sectionHeading("Často kladené otázky", "")?>
                <div class="col-md-12">
                    <p>
                        Vaše otázky, návrhy alebo prípadné námietky ohľadne JPU Vám v tejto sekcii zodpovedia príslušní
                        odborníci, ktorým príspevky rozdelíme podľa ich kompetencií - zástupcovia navrhovateľa, spracovateľ,
                        odborníci z pozemkového úradu, správy katastra a podobne. Za odpovede nesú plnú zodpovednosť ich
                        autori.
                    </p>
                    <p>
                        Správcovia stránky budú otázky a odpovede, ktoré sú prinosné pre JPÚ DNV a ZB zverejňovať v
                        tejto sekcií. Správca stránky nezodpovedajú za obsah príspevku.
                        Vyhradzujeme si právo ignorovať anonymné vulgárne príspevky a príspevky,
                        ktoré budú obsahovať urážlivý, rasový a inak závadný obsah, ktorý sa nebude seriózne
                        zaoberať témou JPÚ DNV a ZB.
                    </p>
                    <p>
                        Vyhradzujeme si tiež právo v ktoromkoľvek okamihu túto sekciu zrušiť,
                        pokiaľ usúdime, že nie je prínosom pre riešenie problematiky  JPÚ DNV a ZB.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row" id="content">
            <div class="box">
                <?php getQandA(); ?>
                <div class="clearfix"></div>
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
