<?php
function sendMailToAllSubscribed() {

    $to = 'ondrej@husar.sk'; // TODO retrieve email-addresses from database

    $subject = 'Na stránke www.pozemkoveupravy.sk pribudol nový článok.';

    $headers = "From: noreply@pozemkoveupravy.sk\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = '<html><body>';
    $message .= '<h1>Testovací mail</h1>';
    $message .= '<a href="http://188.166.16.227/">Stránka</a>';
    $message .= '</body></html>';

    return mail($to, $subject, $message, $headers);
}
