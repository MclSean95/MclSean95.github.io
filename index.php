<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = $_POST['mclsean95@gmail.com'];
    $from = $_POST['tempName'];

    $body = "From $name\n E-mail: $email\n Message: $message";

    if($_POST['submit']){
        if(mail($to, $subject, $body, $from)){
            echo '<p>Your message was sent</p>'
        }
    }

?>