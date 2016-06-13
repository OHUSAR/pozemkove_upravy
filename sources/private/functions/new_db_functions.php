<?php

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
