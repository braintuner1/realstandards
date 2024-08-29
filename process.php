<?php
// Configuration
$to_email = 'info@braintuner.sc.ug'; // Replace with your email address
$subject = ' New School Admission Form Submission';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phonenumber = $_POST['phonenumber'];
    $class = $_POST['class'];
    $age = $_POST['age'];
    $address = $_POST['address'];

    // Create email body
    $email_body = "First Name: $firstname\n";
    $email_body .= "Last Name: $lastname\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Gender: $gender\n";
    $email_body .= "Phone Number: $phonenumber\n";
    $email_body .= "Class: $class\n";
    $email_body .= "Age: $age\n";
    $email_body .= "Address: $address\n";

  // Send email
  if (mail($to, "Website Contact Form", $body, $headers)) {
    $message = "Thank you for your message! We will get back to you soon.";
  } else {
    $message = "Error sending message. Please try again later.";
  }
} else {
  $message = "";
}

?>

<!DOCTYPE html>
<html lang="en">
     <link href="css/style.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
<head>
  <meta charset="UTF-8">
  <title>Thank You For Your response</title>
</head>
<body>
  <h1 style="text-align: center; font-size:100px; margin-top: 260px;"><?php echo $message; ?></h1>
</body>
</html>
