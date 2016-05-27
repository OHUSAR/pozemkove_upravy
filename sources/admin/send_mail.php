<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/article_functions.php') ?>
<?php include('functions/email_functions.php') ?>
<?php siteHead("Admin")?>

<body>
<?php include('html/header.html') ?>
<?php include('html/nav.html') ?>


<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <?php
                if(sendMailToAllSubscribed()){
                    echo "Email bol odoslaný.";
                } else {
                    echo "Vyskytla sa chyba.";
                } ?>
            </div>
        </div>
    </div>
</div>


<?php include('html/scripts.html') ?>
</body>

</html>