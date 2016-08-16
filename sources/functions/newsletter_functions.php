<?php
function addToNewsletter($mail){
    $servername = "localhost";
    $username = "ofm";
    $password = "land9edit";
    $dbname = "land_edit";

    echo "<br>";

    if(!checkInput($mail)){
        echo 'Zadali ste nesprávnu mailovú adresu.';
        return;
    }
    if(isRegistered($mail)){
        echo 'Aktuálne už dostávate newsletter.';
        return;
    }

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO newsletter (mail) VALUES ('".$mail."')";

    if (mysqli_query($conn, $sql)) {
        echo "Ďakujeme, odteraz budete od nás dostávať newsletter";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


function removeFromNewsletter($mail){
    $servername = "localhost";
    $username = "ofm";
    $password = "land9edit";
    $dbname = "land_edit";
    if(!checkInput($mail)){
        echo 'Zadali ste nesprávnu mailovú adresu.';
        return;
    }
    if(isRegistered($mail)){
        echo 'Aktuálne už dostávate newsletter.';
        return;
    }

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

// sql to delete a record
    $sql = "DELETE FROM newsletter WHERE mail='".$mail."'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record. Please contact site administrator.";
    }
    mysqli_close($conn);

}


function isRegistered($mail){
    $servername = "localhost";
    $username = "ofm";
    $password = "land9edit";
    $dbname = "land_edit";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM newsletter WHERE mail = '".$mail."'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        mysqli_close($conn);
        return true;

    } else {
        mysqli_close($conn);
        return false;
    }
}

function checkInput($mail){
    return filter_var($mail, FILTER_VALIDATE_EMAIL);
}

