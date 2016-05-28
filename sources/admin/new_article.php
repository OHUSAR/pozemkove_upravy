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
                <hr>
                <h2 class="intro-text text-center">Nový
                    <strong>článok</strong>
                </h2>
                <hr>
                <?php
                if (isset($_POST["submit"])) {
                    if(isset($_POST["author"]) && isset($_POST["date"]) &&
                        isset($_POST["heading"]) && isset($_POST["content"]) &&
                        isset($_POST["type"]))  {

                        $result = processForm();
                        if(is_string($result)){
                            ?>
                            <div class="col-lg-12">
                                <p class="text-danger text-center">
                                    Prosím vyplňte pole <b><?php echo $result ?></b>.
                                </p>
                            </div>
                            <?php
                        }
                        elseif($result) {
                            ?>
                            <div class="col-lg-12">
                                <p class="text-success text-center">
                                    Článok bol úspešne uložený.
                                </p>
                            </div>
                            <?php
                        }
                        else {
                            ?>
                            <div class="col-lg-12">
                                <p class="text-danger text-center">
                                    Vyskytla sa chyba pri ukladaní do databázy.
                                </p>
                            </div>
                            <?php
                        }
                    }
                    else {
                        echo "Vyplňte prosím všetky polia.";
                    }
                }
                ?>
                <div class="col-lg-12">
                    <div class="form-group">
                        <form method="post" role="form">
                            <br>
                            <label for="id_author">Autor</label>
                            <input type="text" name="author" id="id_author" class="form-control"
                                   value="<?php if(isset($_POST["author"])){echo $_POST["author"];}?>">
                            <br>
                            <label for="id_date">Dátum</label>
                            <input type="date" name="date" id="id_date" class="form-control"
                                   value="<?php if(isset($_POST["date"])){echo $_POST["date"];}?>">
                            <br>
                            <label for="id_heading">Nadpis</label>
                            <input type="text" name="heading" id="id_heading" class="form-control"
                                   value="<?php if(isset($_POST["heading"])){echo $_POST["heading"];}?>">
                            <br>
                                <textarea name="content" id="id_content" class="form-control">
                                    <?php if(isset($_POST["content"])){echo $_POST["content"];}?>
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
        plugins: "image imagetools"
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

