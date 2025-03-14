<!DOCTYPE html>
<html>
<head>
 <title>Contact Form</title>
</head>
<body>
 <h2>Contact Us</h2>
 <?php
 include('Unit08Exercise_contact_cjt66.php');
 error_log("POST " . print_r($_POST, true));
 $name = htmlspecialchars($_POST['name']);
 $email = htmlspecialchars($_POST['email']);
 $message = htmlspecialchars($_POST['message']);
 if ((trim($name) == '')) {
   echo "<h2>Sorry, you must enter a valid name</h2>\n";
 } else if (strlen($name) > 100) {
   echo "<h2>Sorry, your name is too long</h2>\n";
 } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
   echo "<h2>Sorry, you must enter a valid email address</h2>\n";
 } else if (strlen($email) > 100) {
   echo "<h2>Sorry, your email address is too long</h2>\n";
 } else if ((trim($message) == '')) {
   echo "<h2>Sorry, you must enter a valid message</h2>\n";
 } else {
   $contact = new Contact($name, $email, $message);
   $result = $contact->saveContact();
   if ($result)
     echo "<h2>New Contact $name successfully added</h2>\n";
   else
     echo "<h2>Sorry, there was a problem adding that contact
</h2>\n";
 }
 ?>
 <p>Chris Joseph Thayil, IT 202-004, Internet Applications, Unit 08 Exercise, cjt66@njit.edu</p>
 <p>
   <?php
   date_default_timezone_set("America/New_York");
   echo "The date and time is " . date("D M j h:ia T Y");
   ?>
 </p>
</body>
</html>