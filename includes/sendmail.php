<?php

require_once('connect.php');

$message = trim($_POST['message'] ?? '');
$email = trim($_POST['email'] ?? '');
$errors = [];

if (empty($message)) {
    $errors['message'] = 'Please enter a message.';
}

if (empty($email)) {
    $errors['email'] = 'Please leave your email.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'Email could be real!';
}

if (empty($errors)) {
    $email = mysqli_real_escape_string($connect, $email);
    $message = mysqli_real_escape_string($connect, $message);
    $current_date = date('Y-m-d');

    $query = "INSERT INTO contacts (email, message, contact_date) VALUES ('$email', '$message', '$current_date')";

    if (mysqli_query($connect, $query)) {
        $to = 'n_mahaittidon225270@fanshaweonline.ca';
        $subject = 'Message from your Portfolio site!';
        $form_message = "You have received a new contact form submission:\n\n";
        $form_message .= $message . "\n\n";
        $form_message .= "From: " . $email . "\n\n";

        mail($to, $subject, $form_message);
        
        header('Location: thank_you.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($connect);
    }
} else {
    foreach ($errors as $field => $error) {
        echo "<p>$field: $error</p>";
    }
}

?>