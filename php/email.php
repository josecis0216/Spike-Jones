<?php
$subject    = 'E-mail from <spikejones.org>'; // Subject of your email
$to         = ' Wislanmi@uvu.edu'; //Your e-mail address
$headers    = 'MIME-Version: 1.0' . "\r\n" .
              'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message    = 'Name: ' . $_REQUEST['name'] . ' <br/>' .
              'E-mail: ' . $_REQUEST['email'] . ' <br/>' .
              'Phone: ' . $_REQUEST['phone'] . ' <br/>' .
              'Message: ' .$_REQUEST['message'];
if (@mail($to, $subject, $message, $headers))
{
 echo 'Sent! Thanks for your message!';
 unset($_POST['name'], $_POST['email'],$_POST['phone'],$_POST['message']); 

    //process form
    die(header("Location: ../getInvolved.html"));
    echo 'Sent! Thanks for your message!';
    //process form
}

else
{
 echo 'failed';
}
unset($_POST['name'], $_POST['email'],$_POST['phone'],$_POST['message']); 

?>