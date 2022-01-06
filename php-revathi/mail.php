<?php
    #name, contact, email, subject

    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    $to = 'mail@arenawhitefield.com';
    $subject = 'Mail from your website';

    // To send HTML mail, the Content-type header must be set
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';

    // Additional headers
    $headers[] = 'From: ' . $email;
    #$headers[] = 'Cc: mail@example.com';
    #$headers[] = 'Bcc: mail@example.com';

    $message = 'Name : ' . $name;
    $message .= 'Contact : ' . $contact;
    $message .= 'subject : ' . $subject;

    $sendmail = mail($to, $subject, $message, $headers);

    if($sendmail) {
        echo('Your mail has been sent');
        header('Location: http://www.sitename.com');
    } else {
        echo('Unable to send your mail');
        header('Location: http://www.resendmail.com');
    }
?>