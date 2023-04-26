Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // send an email to the website owner
    $to = "nhan09skbk@gmail.com";
    $subject = "New form submission";
    $message = "Name: $name\nEmail: $email";
    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}