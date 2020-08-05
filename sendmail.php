<?php
$to_email = "biharibipin2004@gmail.com";
$sub = "This is a test email";
$body = "Hi,I am Bipin";
$headers = "From:pilotbipin2004@gmail.com";

if(mail($to_email,$sub,$body,$headers)){
    echo "Sent successfully";
}else {
    echo "Not sent";
}
?>