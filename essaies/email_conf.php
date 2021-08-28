<?php
  // To
$to = 'puissancedamour@yahoo.fr';
 
// Subject
$subject = 'Developpez.com - Test Mail';
 
// Headers
$headers = 'Mime-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
$headers .= "\r\n";
 
// Message
$msg = '<strong>Developpez.com</strong> - Message du mail ...';
 
// Function mail()
if(mail($to, $subject, $msg, $headers))echo'reussi';else echo"ljkj";
?>  