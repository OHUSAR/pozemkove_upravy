<!DOCTYPE html>
<html lang="sk">

<?php include('content_functions/functions.php') ?>
<?php siteHead("Admin")?>

<body>
    <?php include('html/header.html') ?>
    <?php include('html/nav.html') ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Nový
                        <strong>článok</strong>
                    </h2>
                    <hr>
                    <div class="col-lg-12">
                        <form method="post">
                            <label for="id_article">Článok</label>
                            <br>
                            <textarea name="article" id="id_article">

                            </textarea>
                            <br>
                            <input type="submit" name="submit" value="Ulož">
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <?php
                        if (isset($_POST["submit"])) {
                            echo $_POST["article"];
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('html/scripts.html')?>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: "textarea",  // change this value according to your HTML
            toolbar1: 'undo redo | styleselect | bold italic | image',
            toolbar2: 'alignleft aligncenter alignright',
            auto_focus: 'id_article',
            plugins: "image imagetools"
        });
    </script>
</body>

</html>

