<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/article_functions.php') ?>
<?php siteHead("Admin")?>

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
            <p class="text-center">
                <a href="send_mail.php">Pošli mail</a>
            </p>
        </div>
    </div>
</div>


<?php include('html/scripts.html') ?>
</body>

</html>