<!DOCTYPE html>
<html lang="sk">

<?php include('functions/content_functions.php') ?>
<?php include('functions/functions.php') ?>
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
                        <div class="form-group">
                            <form method="post" role="form">
                                <br>
                                <label for="id_author">Autor</label>
                                <input type="text" name="author" id="id_author" class="form-control">
                                <br>
                                <label for="id_date">Dátum</label>
                                <input type="date" name="date" id="id_date" class="form-control">
                                <br>
                                <label for="id_heading">Nadpis</label>
                                <input type="text" name="heading" id="id_heading" class="form-control">
                                <br>
                                <textarea name="content" id="id_content" class="form-control">

                                </textarea>
                                <br>
                                <label for="id_type">Typ</label>
                                <select name="type" id="id_type" class="form-control">
                                    <option value=1 class="form-control">Článok</option>
                                    <option value=2 class="form-control">Q&A</option>
                                </select>
                                <br>
                                <input type="submit" name="submit" value="Ulož" class="form-control">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <?php
                        if (isset($_POST["submit"])) {
                            if(isset($_POST["author"]) && isset($_POST["date"]) &&
                                isset($_POST["heading"]) && isset($_POST["content"]) &&
                                 isset($_POST["type"]))  {
                                if(processForm() == false){
                                    echo "ZLE";
                                }
                                else {
                                    echo "OK";
                                }
                            }
                            else {
                                echo "NEVYPLNILI STE ";
                            }
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

      $('#id_date').datepicker({
        'format': 'yyyy-mm-dd',
            'autoclose': true,
            'weekStart': 1
        });
    </script>
</body>

</html>

