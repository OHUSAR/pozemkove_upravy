<?php

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

    $sqlQuery = "SELECT * FROM `articles` WHERE type=1 ORDER BY date_published LIMIT 5 OFFSET ".$offset.";";
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    $result = $qResAndLink[0];

    while ($row = mysql_fetch_array($result)) {

        $id = $row["id"];
        $author = $row["author"];
        $heading = $row["heading"];
        $date = $row['date_published'];
        $content = $row['content'];

        ?>
        <div class="col-lg-12 text-center snippet">
            <h2><?php echo $heading; ?>
                <br>
                <small>od <?php echo $author; ?></small>
                <br>
                <small><?php echo date("d. m. Y", strtotime($date));; ?></small>
            </h2>
            <?php echo $content; ?>
            <a href="article_detail.php?id=<?php echo $id ?>" class="btn btn-default btn-lg">Čítaj viac</a>
            <hr>
        </div>
        <?php
    }
    ?>
    <div class="col-lg-12 text-center">
        <ul class="pager">
            <?php
            $sqlQuery = "SELECT * FROM `articles` WHERE type=1 ORDER BY date_published LIMIT 5 OFFSET ".($offset + 5).";";
            $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
            $result = $qResAndLink[0];
            if (mysql_num_rows($result) > 0) {
                ?>
                <li class="previous">
                    <a  class="text-primary disabled"
                        href="actualities.php?offset=<?php echo ($offset + 5); ?>">
                        &larr; Staršie
                    </a>
                </li>
            <?php }?>
            <?php
            if($offset >= 5) {
                $sqlQuery = "SELECT * FROM `articles` WHERE type=1 ORDER BY date_published LIMIT 5 OFFSET ".($offset - 5).";";
                $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
                $result = $qResAndLink[0];
                if (mysql_num_rows($result) > 0) {

                    ?>
                    <li class="next">
                        <a  class="text-primary"
                            href="actualities.php?offset=<?php echo ($offset - 5); ?>">
                            Novšie &rarr;
                        </a>
                    </li>
                <?php }}?>
        </ul>
    </div>
    <?php
}

function getQandA(){

    $sqlQuery = "SELECT * FROM `articles` WHERE type=2 ORDER BY date_published;";
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    $result = $qResAndLink[0];
    ?>
        <div class="col-lg-12">
            <h2>fungujem</h2>
        </div>
    <?

    while ($row = mysql_fetch_array($result)) {
        $id = $row["id"];
        $author = $row["author"];
        $heading = $row["heading"];
        $date = $row['date_published'];
        $content = $row['content'];

        ?>
        <div class="col-lg-12 text-center snippet">
            <h4><?php echo $heading; ?>
                <br>
                <small>odpovedá <?php echo $author; ?></small>
                <br>
                <small><?php echo date("d. m. Y", strtotime($date));; ?></small>
            </h4>
            <?php echo $content; ?>
            <hr>
        </div>
        <?php
    }
    ?>

    <?php
}