<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "laura@laura.com" /* Email não irá enviar para gmail, ou hotmail, pois ambos bloqueam, esse email é ficticio. */
    $headers  = "De: " . $mailFrom;
    $txt = "Você recebeu um e-mail de " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}