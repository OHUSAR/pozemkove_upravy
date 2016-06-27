<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/login_functions.php') ?>
<?php include('functions/article_functions.php') ?>
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
