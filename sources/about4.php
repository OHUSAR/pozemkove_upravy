about.phpabout.php<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php siteHead('O pozemkových úpravác')?>

<body>
    <?php include('html/header.html') ?>
    <?php include('html/nav.html') ?>

    <div class="container">
        <div class="row">
            <div class="box" id="content">
                <?php sectionHeading("Informácie ", "o pozemkových úpravách")?>
                <?php tabbedNav(4) ?>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/2obvod.png" alt="">
                </div>
                <div class="col-md-6">
                    <p>
                        V obvode JPÚ DNV a ZB  sú funkčné plochy v zmysle Územného plánu Hl.mesta SR Bratislavy (ďalej  len „ÚPN“), definované nasledovne:
                    </p>
                    <ul>
                        <li>občianska vybavenosť celomestského a nadmestského významu, číslo funkcie 201</li>
                        <li>priemyselná výroba, číslo funkcie 301</li>
                        <li>energetika a telekomunikácie, číslo funkcie 602</li>
                        <li>plochy zariadení mestskej hromadnej a autobusovej dopravy, číslo funkcie 701</li>
                        <li>vodné plochy a toky, číslo funkcie 901</li>
                        <li>krajinná zeleň, číslo funkcie 1002</li>
                        <li>parky, sadovnícke úpravy, číslo funkcie 1110</li>
                        <li>ostatná ochranná a izolačná zeleň, číslo funkcie 1130</li>
                        <li>trvalé trávnaté porasty, číslo funkcie 1204</li>
                        <li>orná pôda, číslo funkcie 1205</li>
                    </ul>
                    <p>
                        <a href="img/3upi.pdf" download="UPI.pdf">Stiahnite si dokument o územnom pláne</a>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box" id="content">
                <?php sectionHeading("ROZVOJOVÉ LOKALITY", "")?>
                <div class="col-md-12">
                    <p>
                        V súčasnosti sa v časti územia  JPÚ DNV a ZB  sústredíme na zmenu územného plánu na pozemkoch
                        pri automobilke Volkswagen Slovakia pre jej dodávateľský a logistický park s rozlohou 70 ha,
                        čo je proces, za ktorý je zodpovedné Hl. mesto SR Bratislava.
                    </p>
                    <p>
                        Automobilka VW investuje viac ako miliardu eur do rozšírenia svojich výrobných kapacít,
                        ako aj rozšírenia počtu vyrábaných modelov. Bratislavský závod je zároveň jednou z vlajkových
                        lodí celého koncernu. Väčšina dodávateľov je však od neho vzdialená 30 a viac kilometrov.
                        Vybudovanie nového dodávateľského parku im umožní presťahovať sa bližšie k závodu, čím dôjde
                        k zefektívneniu zásobovania a k zníženiu dopravného rizika a zaťaženia priľahlých ciest.
                    </p>
                    <p>
                        V súčasnosti je na toto územie kladne prerokovaná a schválená Urbanistická štúdia, čo je
                        podmienkou pre zaradenie do balíka najbližších zmien a doplnkov územného plánu, a v rámci
                        v JPÚ DNV a ZB je táto lokalita súčasťou sektoru 4 – POTENCIÁLNA ROZVOJOVÁ PLOCHA CENTROP.
                    </p>
                </div>
                <div class="col-md-12">
                    <img class="img-responsive img-border-left" src="img/23regulacny.png" alt="regulacny vykres">
                </div>
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
