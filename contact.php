<?php 
if(isset($_POST['submit'])){
    $to = "barangay206dinalupihan@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    // $name = $_POST['name'];
    $subject =  $_POST['subject'];
    // $subject2 = "Copy of your form submission";
    $message = $_POST['message'];
    // $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from . "\r\n". "CC: barangay206dinalupihan@gmail.com";

    mail($to, $subject, $message, $headers);
    // $headers2 = "From:" . $to;
    // mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.


    }
    header("location: index.php");
?>