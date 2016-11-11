<?php
$fullname = $_POST['fullname'];
$telephone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail_content = "<table>
        <tr>
            <td>Full name:</td>
            <td>$fullname</td>
        </tr>
        <tr>
            <td>Phone number:</td>
            <td>$telephone</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>$email</td>
        </tr>
        <tr>
            <td>Message:</td>
            <td>$message</td>
        </tr>
    </table>";

$subject = "Request - american-heating-and-air-conditioning.com";


$to= "";


$from= $email;
$header  = "From:  <$from>\r\n";
$header .= "Content-type: text/html\r\n";

mail($to, $subject, $mail_content, $header);
header("Location: /than k-you.php");