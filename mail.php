<?php
$subject = 'RSVP FORM'; // Subject of your email
$to = 'ovieenams@gmail.com';  //Recipient's E-mail




$fullname = $_REQUEST['fullname'];
$country = $_REQUEST['country'];
$guests = $_REQUEST['guests'];
$nameofguest = $_REQUEST['nameofguest'];


$email_from = $name.'<'.$subject.'>';


$message .= 'Full Name : ' . $fullname . "\n";
$message .= 'Country Of Residence : ' . $country . "\n";
$message .= 'Number Of Guest(s) : ' . $guests . "\n";
$message .= 'Name Of Guest(s) : ' . $nameofguest . "\n";



if (@mail($to, $subject, $message, $email_from))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	header("Location: success.html");
    
    echo("Filled Successfully");
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	header("Location: failed.html");
}
?>