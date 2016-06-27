<?php
session_start();
if(! isset($_SESSION['name'])){
    header('Location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="sk">

<?php include('../functions/content_functions.php') ?>
<?php siteHead('Úvod')?>

<body>
<?php include('html/header.php') ?>
<?php include('html/nav.html') ?>

<div class="container">


    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <?php sectionHeading("Pred", "pozemkovými úpravami")?>
                <p>
                    Ste prihlaseny v sukromej casti. Obrazok:
                </p>
                <div class="col-lg-12">
                    <embed style = "margin:auto;" src="img/Popelkova_Eva_Grafika.pdf" width="800px" height="800px"></embed>
                </div>

            </div>
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
