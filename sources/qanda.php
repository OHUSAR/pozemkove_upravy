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
