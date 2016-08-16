<?php
function sendNewsletter($mail, $id){
    //zobrate od ondra - email_functions
    $to = $mail;
    $subject = 'Na stránke www.pozemkoveupravy.sk pribudol nový článok.';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: noreply@pozemkoveupravy.sk\r\n";
    $headers .= "Reply-To: noreply@pozemkoveupravy.sk\r\n";

    $message = '<html><body>';
    $message .= '<h1>Pribudol clanok s id '.$id.'.</h1>';
    $message .= '<a href="http://188.166.16.227/">Stránka</a>';
    $message .= '</body></html>';

    return(mail($to, $subject, $message, $headers));
}

function getAllMails(){
    $servername = "db1.mojhosting.sk";
    $username = "pozemkoveupravy";
    $password = "land9edit";
    $dbname = "pozemkoveupravy";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM newsletter";
    $result = mysqli_query($conn, $sql);
    $ret = [];
    if (mysqli_num_rows($result) > 0) {



        while($row = mysqli_fetch_assoc($result)) {
            $ret[] = $row["mail"];

        }
        mysqli_close($conn);
        return $ret;

    } else {
        mysqli_close($conn);
        return $ret;
    }
}

function sendAll($id){
    $tmp = getAllMails();
    for( $i = 0; $i < count($tmp); $i++){
        if(!sendNewsletter($tmp[$i], $id)){
            echo '<br>An error occured while sending mails.';
            return;
        }

    }
    echo '<br>All emails sent successfully.';
}


?>