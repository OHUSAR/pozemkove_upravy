<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/login_functions.php') ?>
<?php include('functions/article_functions.php') ?>
<?php include('functions/newsletter_functions.php') ?>
<?php siteHead('Aktuality')?>

<body>
    <?php include('html/header.html') ?>
    <?php include('html/nav.html') ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <?php
                    sectionHeading("Aktuality", "o projekte");
                    getArticleList();
                ?>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <div class="form">
                        <?php sectionHeading("Chcete dostávať maily s aktualitami?", "")?>
                        <form class="login-form" method="post">
                            <input type="text" placeholder="Mail" name="mail" required/>
                            <button type="submit" name="newsletterFormSubmit" value="register">Odoslať</button>
                        </form>
                        <?php
                        if (isset($_POST["newsletterFormSubmit"])) {
                            $_POST["mail"] = addslashes(strip_tags(trim($_POST["mail"])));
                            addToNewsletter($_POST["mail"]);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('html/footer.html') ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $("div.snippet").each(function(){
            $("p:not(:first)", this).hide();
        });
    </script>

</body>

</html>
