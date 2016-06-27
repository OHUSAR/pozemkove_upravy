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
        $statement->bind_param("s", $user);

        $statement->execute();
        //$result = $statement->get_result()->fetch_assoc();
        $statement->bind_result($mapPath, $tablePath);
        $statement->fetch();

        $statement->close();
        $dbConnection->close();
        return [$mapPath, $tablePath];
    } else {
        return false;
    }
}

function getEmbedTagWithMap($paths) {
    global $_MAP_FOLDER;
    if (!$paths[0]) {
        return "<h3 class='text-center'>Súbor s mapou sa nenašiel.</h3>";
    }
    return "<embed class='col-lg-12' src='". $_MAP_FOLDER . $paths[0] ."' height='800px'></embed>";
}

function getEmbedTagWithTable($paths) {
    global $_MAP_FOLDER;
    if (!$paths[1]) {
        return "<h3 class='text-center'>Súbor s tabuľkou sa nenašiel.</h3>";
    }
    return "<embed class='col-lg-12' src='". $_MAP_FOLDER . $paths[1] ."' height='150px'></embed>";
}