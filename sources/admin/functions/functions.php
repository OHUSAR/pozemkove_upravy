<?php
    include('../functions/login_functions.php');

    function processForm() {
        $author = test_input($_POST["author"]);
        $heading = test_input($_POST["heading"]);
        $date = test_input($_POST["date"]);
        $content = $_POST["content"];
        $type = test_input($_POST["type"]);
        
        if($author == false || $heading == false || $date == false || $type == false) {
            return false;
        }
        if (saveForm($author, $heading, $date, $content, $type) == false){
            return false;
        };
        return true;
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
