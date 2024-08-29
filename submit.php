<?php
// Configuration
$to_email = 'info@braintuner.sc.ug'; // Replace with your email address
$subject = ' New School Admission Form Submission';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $firstname = $_POST['firstname'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];
    $dateofbirth = $_POST['dateofbirth'];
    $age = $_POST['age'];
    $name = $_POST['name'];
    $phonenumber = $_POST['phonenumber'];
    $message = $_POST['message'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    // Create email body
    $email_body = "First Name: $firstname\n";
    $email_body .= "Class: $class\n";
    $email_body .= "Gender: $gender\n";
    $email_body .= "Date Of Birth: $dateofbirth\n";
    $email_body .= "Section: $age\n";
    $email_body .= "Guardian's Name: $name\n";
    $email_body .= "Guardian's Phone Number: $phonenumber\n";
    $email_body .= "Guardian's Gender: $message\n";
    $email_body .= "Address: $address\n";
    $email_body .= "Guardian's Email: $email\n";
    // Send email
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n";
    mail($to_email, $subject, $email_body, $headers);

    // Display success message
 echo '<h1 style="font-family: Arial, sans-serif; color: black; text-align:center;">Thank you for submitting the form! Your data has been successfully processed.</h1>';
  
    // Display error message
}
?>