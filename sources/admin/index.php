<?php
session_start();
if(! isset($_SESSION['admin'])){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/article_functions.php') ?>
<?php include('functions/email_functions.php') ?>
<?php include('functions/newsletter_functions.php') ?>

<?php siteHead("Admin")?>

    <body>
    <?php include('html/header.html') ?>
    <?php include('html/nav.html') ?>
    

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <?php getArticleList(1); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <div class="form">
                        <form class="login-form" method="post">
                            <button type="submit" name="sendNewsletterSubmit" value="register">Odoslať newsletter!</button>
                        </form>
                        <?php
                        if (isset($_POST["sendNewsletterSubmit"])) {
                            sendAll('{test ID}');
                            echo '<br>Odoslali ste newsletter.';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




    
    
    <?php include('html/scripts.html') ?>
    </body>
 
</html>