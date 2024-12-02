<?php
$fromEmail = "pavanimpex@pavanstones.com"; // replace with my domain
    $toEmail = "pavanimpex2007@gmail.com";      // replace with my domain

    $name = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["cntno"];
    $address = $_POST["Address"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];



    $emailMessage = array(
        "Hello I'm testing this email service because it doesn't seem to be working right now. Date: ".date(DATE_RFC2822),
        "Name: ".$name,$lname,
        "Email: ".$email,
        "Phone: ".$phone,
        "Address: ".$address,
        "message: ".$message,

    );
    console.log($emailMessage);
    $emailMessage = implode("\r\n", $emailMessage);

    $headers = array("From: ".$fromEmail,
        "Reply-To: ".$fromEmail,
        "X-Mailer: PHP/" . PHP_VERSION
    );
    $headers = implode("\r\n", $headers);

    mail($toEmail,$subject, $emailMessage, $headers, "-f".$fromEmail);

    header("Location: http://www.pavanstones.com/contactus.html");
?>