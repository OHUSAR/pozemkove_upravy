<!DOCTYPE html>
<html lang="sk">

<?php
    session_start();
    include('functions/login_functions.php');
    include('functions/content_functions.php');
?>
<?php siteHead('Prihlasovanie')?>


<body>
<?php include('html/header.html') ?>
<?php include('html/nav.html') ?>

<div class="container">

    <div class="row">
        <div class="box">
            <?php sectionHeading("Prihlasovanie", "do súkromnej sekcie")?>
            <div class="col-lg-12">
                <?php
                if (isset($_POST["loginFormSubmit"])) {

                    $_POST["username"] = addslashes(strip_tags(trim($_POST["username"])));
                    $_POST["password"] = addslashes(strip_tags(trim($_POST["password"])));
                    // call function to determine if login data are correct and log user in
                    if(checkInputAndLogIn($_POST["username"], $_POST["password"])){
                        header('Location: private.php');
                };
                }
                ?>
                <div class="login-page">
                    <div class="form">
                        <form class="login-form" method="post">
                            <input type="text" placeholder="Prihlasovacie meno" name="username" required/>
                            <input type="password" placeholder="Heslo" name="password" required/>
                            <button type="submit" name="loginFormSubmit" value="login">login</button>
                        </form>
                    </div>
                </div>
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
