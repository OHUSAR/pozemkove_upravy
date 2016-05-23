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

        echo "ahoj";
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
    if ($dbLink = linkToDB()) {
        // link successful
        if ($queryResult = mysql_query($sqlQuery, $dbLink)) {
            // querry successful
            return array($queryResult, $dbLink);
        } else {
            // querry unsuccessful
            echo "Error while conducting query";
            return false;
        }
    } else {
        // link unsucessful
        echo "Error while connecting to database";
        return false;
    }
}

function linkToDB() {
    if ($dbLink = mysql_connect('localhost', 'root', '')) {
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

?>