<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email tujuan (ganti dengan email Anda)
    $to = "hilmimubarokdeni@gmail.com";
    
    // Subject email
    $email_subject = "New Contact Form: " . $subject;
    
    // Isi email
    $email_body = "
    Name: $name\n
    Phone: $phone\n
    Email: $email\n
    Subject: $subject\n
    Message:\n$message
    ";
    
    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Kirim email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>