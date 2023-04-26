<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

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