<?php
$_MAP_FOLDER = "mapFiles";

include ("new_db_functions.php");

function getUserMapAndTablePath($user) {
    $query = "
      SELECT file_path, table_path
      FROM user_map
      JOIN users
      ON user_id = users.id
      JOIN maps
      ON map_id = maps.id
      WHERE users.username = ?
      ORDER BY map_date DESC
      LIMIT 1
    ";

    $dbConnection = linkToDbAndReturnConnection();
    if ($dbConnection != false) {
        $statement = $dbConnection->prepare($query);
        $statement->bind_param("s", $username);
        $username = $user;

        $statement->execute();

        $result = $statement->get_result()->fetch_assoc();


        $dbConnection->close();

        return [$result["file_path"], $result["table_path"]];
    } else {
        return false;
    }
}

function getEmbedTagWithMap($paths) {
    global $_MAP_FOLDER;
    return "<embed class='col-lg-12' src='". $_MAP_FOLDER . $paths[0] ."' height='800px'></embed>";
}

function getEmbedTagWithTable($paths) {
    global $_MAP_FOLDER;
    return "<embed class='col-lg-12' src='". $_MAP_FOLDER . $paths[1] ."' height='150px'></embed>";
}