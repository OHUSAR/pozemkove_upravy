<?php
session_start();
if(! isset($_SESSION['admin'])){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php siteHead("Admin")?>

<body>
    <?php include('html/header.html') ?>
    <?php include('html/nav.html') ?>
    <div class="container">
        <!-- YOUR CONTENT HERE -->
    </div>
    <!-- /.container -->
    <?php include('html/scripts.html')?>
</body>

</html>
