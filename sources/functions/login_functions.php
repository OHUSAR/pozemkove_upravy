<?php
function checkInputAndLogIn($username, $password) {
    $sqlQuery = "SELECT * FROM users WHERE username ='".$username."'
    AND password = '".$password."';";
    $qResAndLink = dbConnectAndExecQuerry($sqlQuery);
    $userData = mysql_fetch_assoc($qResAndLink[0]);

    if ($userData) {
        // login successful
        $_SESSION["userInfo"] = array(
            //INFO FROM DB
        );

        mysql_free_result($qResAndLink[0]);
        mysql_close($qResAndLink[1]);
        return true;

    } else {
        mysql_free_result($qResAndLink[0]);
        mysql_close($qResAndLink[1]);
        // login unsuccessful
        echo "<div class='row'><div class='col-lg-12 text-center'>
                <p class='text-danger'>Chyba! Zle ste zadali prihlasovacie meno alebo heslo.</p>
              </div></div>";
        return false;
    }
}

function dbConnectAndExecQuerry($sqlQuery) {
    if ($dbLink = linkToDbAndReturnConnection()) {
        // link successful
        if ($queryResult = mysql_query($sqlQuery, $dbLink)) {
            // querry successful
            return array($queryResult, $dbLink);
        } else {
            // querry unsuccessful
            // echo "Error while conducting query";
            return false;
        }
    } else {
        // link unsucessful
        // echo "Error while connecting to database";
        return false;
    }
}

function linkToDbAndReturnConnection() {
    $_DB_SCHEMA = "land_edit";
    $_DB_SERVER = "localhost";
    $_DB_USER = "ofm";
    $_DB_PASS = "land9edit";

    $conn = new mysqli($_DB_SERVER, $_DB_USER, $_DB_PASS, $_DB_SCHEMA);
    if ($conn->connect_error) {
        return false;
    } else {
        return $conn;
    }
}

function linkToDB() {
    if ($dbLink = mysql_connect('localhost', 'ofm', 'land9edit')) {
        if (mysql_select_db('land_edit', $dbLink)) {
            // database selection successful
            mysql_query("SET CHARACTER SET 'utf8'", $dbLink);
            return $dbLink;
        } else {
            // database selection failed
            return false;
        }
    } else {
        // database connection failed
        return false;
    }
}
