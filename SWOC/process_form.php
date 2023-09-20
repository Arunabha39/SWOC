<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = $_POST["author"];
    $comment = $_POST["comment"];
    
    // Your email address where you want to receive the submissions
    $to = "arunabhamishra39@gmail.com";

    // Subject of the email
    $subject = "New Comment from SWOC Analysis Website";

    // Email message
    $message = "Author: $author\n";
    $message .= "Comment: $comment\n";

    // Additional headers
    $headers = "From: webmaster@example.com" . "\r\n" .
               "Reply-To: webmaster@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        echo "Thank you for your comment. It has been submitted successfully.";
    } else {
        echo "Sorry, there was an error while submitting your comment.";
    }
} else {
    echo "Invalid request.";
}
?>
