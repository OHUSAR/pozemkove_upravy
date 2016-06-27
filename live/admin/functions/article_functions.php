<?php
include('../functions/login_functions.php');

function processForm() {
    $author = test_input($_POST["author"]);
    $heading = test_input($_POST["heading"]);
    $date = test_input($_POST["date"]);
    $content = $_POST["content"];
    $type = test_input($_POST["type"]);

    if($author == false) {
        return 'Autor';
    }
    if($date == false) {
        return 'Dátum';
    }
    if($heading == false) {
        return 'Nadpis';
    }
    return saveForm($author, $heading, $date, $content, $type);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    if ($data == "") {
        return false;
    }
    return $data;
}

function saveForm($author, $heading, $date, $content, $type) {
    $sqlQuery = "INSERT INTO articles (author, heading, date_published, content, type) 
                      VALUES ('".$author."', '".$heading."', '".$date."', '".$content."', ".$type.")";
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    return $qResAndLink[0];
}

function getArticle() {
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $article_id = $_GET['id'];
    }
    else {
        $article_id = 0;
    }

    $sqlQuery = "SELECT * FROM `articles` WHERE `id`=".$article_id;
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    $result = $qResAndLink[0];

    $id = "";
    $author = "";
    $heading = "";
    $date = "";
    $content = "";
    while ($row = mysql_fetch_array($result)) {
        $author = $row["author"];
        $heading = $row["heading"];
        $date = $row["date_published"];
        $content = $row["content"];
        $id = $row["id"];
    }

    ?>
    <div class="col-lg-12 text-center" xmlns="http://www.w3.org/1999/html">
        <div class="col-lg-12">
            <a href="delete.php?id=<?php echo $id ?>">Vymaž</a> |
            <a href="edit.php?id=<?php echo $id ?>">Uprav</a>
            <hr>
            <h2><?php echo $heading; ?></h2> od <h4><?php echo $author; ?></h4>
        </div>
        <div class="col-lg-12">
            <small>
                <?php echo $date; ?>
            </small>
            <hr>
        </div>
        <div class="col-lg-12">
            <?php echo $content; ?>
        </div>
    </div>
    <?php
}

function getArticleList($type) {
    if(isset($_GET['offset']) && is_numeric($_GET['offset'])){
        $offset = $_GET['offset'];
    }
    else {
        $offset = 0;
    }

    $sqlQuery = "SELECT * FROM `articles` WHERE type=".$type." ORDER BY date_published LIMIT 5 OFFSET ".$offset.";";
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    $result = $qResAndLink[0];

    while ($row = mysql_fetch_array($result)) {

        $id = $row["id"];
        $author = $row["author"];
        $heading = $row["heading"];

        ?>
        <div class="col-lg-12">
            <div class="col-lg-12 text-center">
                <hr>
                <a href="article_detail.php?id=<?php echo $id ?>">
                    <h2><?php echo $heading; ?> od <?php echo $author; ?></h2>
                </a>
            </div>
        </div>
        <?php
    }
    $section = "index.php";
    if($type == 2){
        $section = "questions.php";
    }
    ?>
    <div class="col-lg-12 text-center">
        <ul class="pager">
            <?php
            $sqlQuery = "SELECT * FROM `articles` WHERE type=".$type." ORDER BY date_published LIMIT 5 OFFSET ".($offset + 5).";";
            $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
            $result = $qResAndLink[0];
            if (mysql_num_rows($result) > 0) {
                ?>
                <li class="previous">
                    <a  class="text-primary disabled"
                        href="<?php echo $section; ?>?offset=<?php echo ($offset + 5); ?>">
                        &larr; Staršie
                    </a>
                </li>
            <?php }?>
            <?php
            if($offset >= 5) {
                $sqlQuery = "SELECT * FROM `articles` WHERE type=".$type." ORDER BY date_published LIMIT 5 OFFSET ".($offset - 5).";";
                $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
                $result = $qResAndLink[0];
                if (mysql_num_rows($result) > 0) {

                    ?>
                    <li class="next">
                        <a  class="text-primary"
                            href="<?php echo $section; ?>?offset=<?php echo ($offset - 5); ?>">
                            Novšie &rarr;
                        </a>
                    </li>
                <?php }}?>
        </ul>
    </div>
    <?php
}

function deleteArticle() {
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
    }

    $sqlQuery = "DELETE FROM `articles` WHERE id=".$id.";";
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    return $qResAndLink[0];
}

function editForm() {

    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
    }
    else {
        $id = 0;
    }
//     <!--  LOADING ARTICLE FROM DATABASE  -->
    $sqlQuery = "SELECT * FROM `articles` WHERE id=".$id.";";
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    $result = $qResAndLink[0];

    $id = 0;
    $author = "";
    $heading = "";
    $date = "";
    $content = "";
    $type = 1;
    while ($row = mysql_fetch_array($result)) {
        $id = $row["id"];
        $author = $row["author"];
        $heading = $row["heading"];
        $date = $row["date_published"];
        $content = $row["content"];
        $type = $row["type"];
    }
    if(isset($_POST["type"])) {
        $type = $_POST["type"];
    }
//    <!-- END LOADING ARTICLE FROM DATABASE  -->
    ?>

    <!--  ARTICLE TITLE  -->
    <hr>
    <h2 class="intro-text text-center">Upraviť článok <strong><?php echo $heading; ?></strong> </h2>
    <p class="text-center">
        <a href=<?php echo "article_detail.php?id=".$id; ?>>Späť</a>
    </p>
    <hr>
    <!--  END ARTICLE TITLE  -->

    <!-- FORM VALIDATION  -->
    <?php
    if (isset($_POST["submit"])) {
        $result = processUpdateForm($id);
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
    ?>
    <!--  END FORM VALIDATION  -->

    <!--  FORM  -->
    <div class="form-group">
        <form method="post" role="form">
            <br>
            <label for="id_author">Autor</label>
            <input type="text" name="author" id="id_author" class="form-control"
                   value="<?php
                   if(isset($_POST["author"])){
                       echo $_POST["author"];
                   } else {
                       echo $author;
                   }
                   ?>">
            <br>
            <label for="id_date">Dátum</label>
            <input type="date" name="date" id="id_date" class="form-control"
                   value="<?php
                   if(isset($_POST["date"])){
                       echo $_POST["date"];
                   } else {
                       echo $date;
                   }
                   ?>">
            <br>
            <label for="id_heading">Nadpis</label>
            <input type="text" name="heading" id="id_heading" class="form-control"
                   value="<?php
                   if(isset($_POST["heading"])){
                       echo $_POST["heading"];
                   } else {
                       echo $heading;
                   }
                   ?>">
            <br>
            <textarea name="content" id="id_content" class="form-control">
                <?php
                if(isset($_POST["content"])) {
                    echo $_POST["content"];
                }
                else {
                    echo $content;
                }
                ?>
            </textarea>
            <br>
            <label for="id_type">Typ</label>
            <select name="type" id="id_type" class="form-control">
                <option value=1 class="form-control"
                    <?php if($type == 1){echo "selected";} ?>
                >
                    Článok
                </option>
                <option value=2 class="form-control"
                    <?php if($type == 2){echo "selected";} ?>
                >
                    Q&A
                </option>
            </select>
            <br>
            <input type="submit" name="submit" value="Ulož" class="form-control">
        </form>
    </div>
    <!-- END FORM  -->
    <?php
}

function processUpdateForm($id) {

    $author = test_input($_POST["author"]);
    $heading = test_input($_POST["heading"]);
    $date = test_input($_POST["date"]);
    $content = $_POST["content"];
    $type = test_input($_POST["type"]);

    if($author == false) {
        return 'Autor';
    }
    if($date == false) {
        return 'Dátum';
    }
    if($heading == false) {
        return 'Nadpis';
    }

    $sqlQuery = "UPDATE articles SET author='".$author."',
                                     heading='".$heading."',
                                     date_published='".$date."',
                                     content='".$content."',
                                     type=".$type." WHERE id=".$id.";";
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    return $qResAndLink[0];
}