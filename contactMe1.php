<?php
// The contact Us Form wont work with Local Host but it will work on Live Server
if(isset($_REQUEST['submit'])) {
// Checking for Empty Fields
if(($_REQUEST['name'] == "") || ($_REQUEST['email'] == "") ||
   ($_REQUEST['phone'] == "") || ($_REQUEST['message'] == "")) {
// msg displayed if required field missing
$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
}
else {
$name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

$mailTo = "diwanhitesh68@gmail.com";
$headers = "From: ".$email;
$txt = "You have received an email from ".$name.".\n\n".$message;
mail($mailTo, $phone, $txt, $headers);
$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Sent Successfully </div>';
}
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    
</head>
<body>

<div class="box">
    <h2>Contact Form</h2>

    
    <form action="contactMe1.php" method="POST">
        <input type="text" name="name" placeholder="Your Name">
        <input type="text" name="email" placeholder="Your Email">
        <input type="text" name="Phone" placeholder="Your Phone">
        <textarea name="message" placeholder="Your Message"></textarea>
        <button class="btn" type="submit">Send Message</button>
    <?php if(isset($msg)) {echo $msg} ?>
    </form>
</div>

</body>
</html>

