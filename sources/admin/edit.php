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
<?php siteHead("Admin")?>

<body>
<?php include('html/header.html') ?>
<?php include('html/nav.html') ?>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <?php editForm(); ?>
            </div>
        </div>
    </div>
</div>
<?php include('html/scripts.html')?>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: "textarea",  // change this value according to your HTML
        toolbar1: 'undo redo | styleselect | bold italic | image link',
        toolbar2: 'alignleft aligncenter alignright',
        plugins: "image imagetools link",
        extended_valid_elements: "embed[class=col-lg-12|src|height=800px]",
    });

    $('#id_date').datepicker({
        'format': 'yyyy-mm-dd',
        'autoclose': true,
        'weekStart': 1,
        'todayHighlight': true
    });
</script>
</body>

</html>

