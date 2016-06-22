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
        // TODO: EDIT EMAIL AND HEADER
        mail("filo.kovac@gmail.com", "Test mailov", $mailContent);
    }