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
        if(isset($_GET['id'])){
            $article_id = $_GET['id'];
        }
        else{
            $article_id = 4;
        }

        if(!is_numeric($article_id))
            die('Nesprávne id článku.');

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
