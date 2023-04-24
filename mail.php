<?php
$subject = 'RSVP FORM'; // Subject of your email
$to = 'ovieenams@gmail.com';  //Recipient's E-mail
// $from = $_POST['submit@meetthearunas.com']; // Submit email



$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$emailaddress = $_REQUEST['emailaddress'];
$country = $_REQUEST['country'];
$streetaddress = $_REQUEST['streetaddress'];
$city = $_REQUEST['city'];
$postalcode = $_REQUEST['postalcode'];
$receptionresponse = $_REQUEST['receptionresponse'];
$guests = $_REQUEST['guests'];
$nameofguest = $_REQUEST['nameofguest'];


$email_from = $emailaddress;


$message .= 'First Name : ' . $firstname . "\n";
$message .= 'Last Name : ' . $lastname . "\n";
$message .= 'Email Address : ' . $emailaddress . "\n";
$message .= 'Country : ' . $country . "\n";
$message .= 'Street Address: ' . $streetaddress  . "\n";
$message .= 'City : ' . $city . "\n";
$message .= 'Postal Code : ' . $postalcode . "\n";
$message .= 'Reception Response: ' . $receptionresponse . "\n";
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