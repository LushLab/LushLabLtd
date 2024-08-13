<?php
// Get form data
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$procedure = $_POST['procedure'];
$treatment = $_POST['treatment'];
$sessions = $_POST['sessions'];
$message = $_POST['message'];

// Create email message
$subject = "New inquiry from $first_name $last_name";
$body = "Name: $first_name $last_name \n\nEmail: $email \n\nPhone: $phone \n\nProcedure: $procedure \n\nTreatment: $treatment \n\nSessions: $sessions \n\nMessage: $message";
$headers = "From: $email";

// Send email
$mail_sent = mail('info@lushlab.uk', $subject, $body, $headers);

// Redirect to original page with success/failure message
if ($mail_sent) {
  header("Location: contact.html?status=success");
  exit();
} else {
  header("Location: contact.html?status=failure");
  exit();
}
?>
