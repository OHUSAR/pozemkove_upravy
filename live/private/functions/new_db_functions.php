<?php

function linkToDbAndReturnConnection() {
    $_DB_SCHEMA = "pozemkoveupravy";
    $_DB_SERVER = "db1.mojhosting.sk";
    $_DB_USER = "pozemkoveupravy";
    $_DB_PASS = "land9edit";

    $conn = new mysqli($_DB_SERVER, $_DB_USER, $_DB_PASS, $_DB_SCHEMA);
    if ($conn->connect_error) {
        return false;
    } else {
        return $conn;
    }
}
