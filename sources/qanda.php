<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
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

                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row" id="content">
            <div class="box">
                <?php sectionHeading("Opýtajte sa nás", "")?>

                <div class="col-md-12">
                    <?php getQandA(); ?>
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
