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
<?php include('functions/newsletter_functions.php') ?>
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
                        if(isset($_GET['id']) && is_numeric($_GET['id'])){
                            $article_id = $_GET['id'];
                            sendAll($article_id);
                        }
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