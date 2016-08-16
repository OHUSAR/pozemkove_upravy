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
                        <b>V obvode JPÚ DNV a ZB  sú funkčné plochy v zmysle Územného plánu Hl.mesta
                        SR Bratislavy</b> (ďalej  len „ÚPN“), definované nasledovne:
                    </p>
                    <ul>
                        <li><b>občianska vybavenosť celomestského a nadmestského významu,</b> číslo funkcie 201</li>
                        <li><b>priemyselná výroba,</b> číslo funkcie 301</li>
                        <li><b>energetika a telekomunikácie,</b> číslo funkcie 602</li>
                        <li><b>plochy zariadení mestskej hromadnej a autobusovej dopravy,</b> číslo funkcie 701</li>
                        <li><b>vodné plochy a toky,</b> číslo funkcie 901</li>
                        <li><b>krajinná zeleň,</b> číslo funkcie 1002</li>
                        <li><b>parky, sadovnícke úpravy,</b> číslo funkcie 1110</li>
                        <li><b>ostatná ochranná a izolačná zeleň,</b> číslo funkcie 1130</li>
                        <li><b>trvalé trávnaté porasty,</b> číslo funkcie 1204</li>
                        <li><b>orná pôda,</b> číslo funkcie 1205</li>
                    </ul>
                    <p>
                        <a href="img/3upi.pdf" download="UPI.pdf">Stiahnite si dokument o územnom pláne - územnoplánovacia informácia</a>
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
                        V súčasnosti sa v časti územia  JPÚ DNV a ZB  <b>sústredíme na zmenu územného plánu</b> na pozemkoch
                        pri automobilke Volkswagen Slovakia <b>pre jej dodávateľský a logistický park s rozlohou 70 ha</b>,
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
                        V súčasnosti je na toto územie <b>kladne prerokovaná a schválená Urbanistická štúdia</b>, čo je
                        podmienkou pre zaradenie do balíka najbližších zmien a doplnkov územného plánu, a v rámci
                        <b>v JPÚ DNV a ZB</b> je táto lokalita súčasťou sektoru 4 – POTENCIÁLNA ROZVOJOVÁ PLOCHA CENTROP.
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
