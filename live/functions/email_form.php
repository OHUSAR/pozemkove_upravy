<?php
    function checkCorrectEmail($emailStr) {
        return filter_var($emailStr, FILTER_VALIDATE_EMAIL);
    }

    function checkCorrectName($nameStr) {
        return preg_match("/[^0-9]+/", $nameStr);
    }

    function checkContent($contentStr) {
        return strlen($contentStr) >= 3;
    }

    function sendEmailWithQuestion ($name, $returnMail, $content) {

        $mailContent = "Odosieľateľ: " . $name . "\nE-mail: " . $returnMail . "\nObsah otázky: " . $content;
        $mailContent = wordwrap($mailContent, 70);
        $headers = "Content-Type: text/html; charset=UTF-8";
        // TODO: EDIT EMAIL AND HEADER
        mail("info@pozemkoveupravy.sk", "PRIVATE - question", $mailContent, $headers);
    }