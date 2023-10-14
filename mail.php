<?php
// the message
$msg = "Someone booked an appointment!\nPlease check now.";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("info@carecure24.com","Appoinment Booked!",$msg);
?>