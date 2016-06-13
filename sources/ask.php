<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/login_functions.php') ?>
<?php include('functions/article_functions.php') ?>
<?php siteHead('Kontakt')?>

<!-- Q&A email form stylesheet -->
<link href="private/css/emailForm.css" rel="stylesheet">

<body>
    <?php include('html/header.html') ?>
    <?php include('html/nav.html') ?>

    <div class="container">
        <div class="row" id="content">
            <div class="box">
                <?php tabbedContactNav(2); ?>
                <?php sectionHeading("Opýtajte sa nás", "")?>
                <div class="col-lg-12">
                    <form method="post" class="emailForm">
                        <div class="form-group row">
                            <div class="col-lg-5">
                                <input class="form-control" type="text" placeholder="Vaše meno"
                                       name="questionPersonName"
                                       value="<?php
                                       if (isset($_POST["questionPersonName"]) && checkCorrectName($_POST["questionPersonName"])) {
                                           echo $_POST["questionPersonName"];
                                       }
                                       ?>">
                            </div>
                            <div class="col-lg-5 col-lg-offset-2">
                                <input class="form-control" type="text" placeholder="Email" name="questionEmail"
                                       value="<?php
                                       if (isset($_POST["questionEmail"]) && checkCorrectEmail($_POST["questionEmail"])) {
                                           echo $_POST["questionEmail"];
                                       } ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                            <textarea class="form-control" placeholder="Váš dotaz" rows="10" name="questionContent"><?php
                                if (isset($_POST["questionContent"]) && checkContent($_POST["questionContent"])) {
                                    echo $_POST["questionContent"];
                                }
                                ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-4 col-lg-offset-4">
                                <input class="form-control" type="submit" value="Odoslať otázku"
                                       name="questionSubmit">
                            </div>
                        </div>
                    </form>
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
