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
    try {
        $query = "INSERT INTO contacts (email, message, contact_date) VALUES (:email, :message, NOW())";
        $stmt = $connect->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        if ($stmt->execute()) {
            $to = 'n_mahaittidon225270@fanshaweonline.ca';
            $subject = 'Message from your Portfolio site!';
            $form_message = "You have received a new contact form submission:\n\n";
            $form_message .= $message . "\n\n";
            $form_message .= "From: " . $email . "\n\n";
            mail($to, $subject, $form_message);
            header('Location: thank_you.php');
        } else {
            echo 'Unfortunately, the message could not be sent. Please try again later.';
        }
    } catch (PDOException $e) {
        error_log($e->getMessage());
        exit('Something went wrong. Please try again later.');
    }
} else {
    foreach ($errors as $field => $error) {
        echo "<p>$field: $error</p>";
    }
}
?>
