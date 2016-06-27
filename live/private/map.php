<?php
session_start();
if(! isset($_SESSION['name'])){
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="sk">

    <?php   include('../functions/content_functions.php');
            include("functions/pdf_embed_functions.php");
    ?>
    <?php siteHead('Mapa')?>

    <!-- Map/Table elements stylesheet -->
    <link href="css/pdfEmbed.css" rel="stylesheet">

    <body>
        <?php include('html/header.php') ?>
        <?php include('html/nav.html') ?>

        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <p>
                            V tejto časti nájdete informácie o Vašich pozemkoch v obvode JPÚ ZB a DNV.
                            V grafickej časti nájdete zobrazené Vaše pozemky v obvode pozemkových úprav, kde sú vyznačené sektory (projektové bloky).
                            V tabuľke nájdete sumárne základné informácie o Vašich pozemkoch.
                            <br><br>
                            Tieto podklady a informácie nie sú úradnými informáciami, ktoré Vám budú poskytnuté v projekte pozemkových úprav.
                        </p>

                        <div class="col-lg-12">
                            <?php   sectionHeading("", "Mapa");
                                    $paths = getUserMapAndTablePath($_SESSION["name"]);
                                    echo getEmbedTagWithMap($paths);
                            ?>

                        </div>
                        <div class="col-lg-12">
                            <?php   sectionHeading("", "Tabuľka");
                                    echo getEmbedTagWithTable($paths);
                            ?>
                        </div>
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