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

    $author = "";
    $heading = "";
    $date = "";
    $content = "";
    while ($row = mysql_fetch_array($result)) {
        $author = $row["author"];
        $heading = $row["heading"];
        $date = $row["date_published"];
        $content = $row["content"];
    }

    ?>
    <div class="col-lg-12 text-center">
        <div class="col-lg-12">
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

function getArticleList() {
    if(isset($_GET['offset']) && is_numeric($_GET['offset'])){
        $offset = $_GET['offset'];
    }
    else {
        $offset = 0;
    }

    $sqlQuery = "SELECT * FROM `articles` ORDER BY date_published LIMIT 5 OFFSET ".$offset.";";
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
    ?>
    <div class="col-lg-12 text-center">
        <ul class="pager">
            <?php
            $sqlQuery = "SELECT * FROM `articles` ORDER BY date_published LIMIT 5 OFFSET ".($offset + 5).";";
            $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
            $result = $qResAndLink[0];
            if (mysql_num_rows($result) > 0) {
            ?>
            <li class="previous">
                <a  class="text-primary disabled"
                    href="articles.php?offset=<?php echo ($offset + 5); ?>">
                    &larr; Staršie
                </a>
            </li>
            <?php }?>
            <?php
            if($offset >= 5) {
                $sqlQuery = "SELECT * FROM `articles` ORDER BY date_published LIMIT 5 OFFSET ".($offset - 5).";";
                $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
                $result = $qResAndLink[0];
                if (mysql_num_rows($result) > 0) {

                    ?>
            <li class="next">
                <a  class="text-primary"
                    href="articles.php?offset=<?php echo ($offset - 5); ?>">
                    Novšie &rarr;
                </a>
            </li>
                <?php }}?>
        </ul>
    </div>
    <?php
}