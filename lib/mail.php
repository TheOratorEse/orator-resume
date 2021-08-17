<?php 
if(isset($_POST['submit'])){
    $to = "oratoreseiwi@gmail.com"; // this is your Email address
    $from = $_POST['sender_email']; // this is the sender's Email address
    $sender_name = $_POST['sender_name'];
    $subject1 = $_POST['subject'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $sender_name . " " . $subject1 . " wrote the following:" . "\n\n" . $_POST['body'];
    $message2 = "Here is a copy of your message " .  $sender_name . "\n\n" . $_POST['body'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    
    header("Location: thank-you.php");
    // You can also use header('Location: thanks.php'); to redirect to another page.
   // echo "Mail Sent. Thank you " . $sender_name . ", we will contact you shortly.";
    // You cannot use header and echo together. It's one or the other.
    }
?>
