<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/login_functions.php') ?>
<?php include('functions/article_functions.php') ?>
<?php siteHead("Článok")?>

<body>
<?php include('html/header.html') ?>
<?php include('html/nav.html') ?>


<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <?php getArticle(); ?>
            </div>
            <hr>
        </div>
    </div>
</div>

<?php include('html/footer.html') ?>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>