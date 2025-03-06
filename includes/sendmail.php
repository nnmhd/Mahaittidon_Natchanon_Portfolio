<?php

require_once('connect.php');

header('Content-Type: application/json');

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

if (!empty($errors)) {
    echo json_encode(['errors' => $errors]);
    exit;
}

try {
    $query = "INSERT INTO contacts (email, message, contact_date) VALUES (:email, :message, NOW())";
    $stmt = $connect->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);

    if ($stmt->execute()) {
        $to = 'me@nnmhd.com';
        $subject = 'Message from your Portfolio site!';
        $form_message = "You have received a new contact form submission:\n\n";
        $form_message .= $message . "\n\n";
        $form_message .= "From: " . $email . "\n\n";
        mail($to, $subject, $form_message);

        echo json_encode(['message' => 'Your message has been sent successfully!']);
        exit;
    } else {
        echo json_encode(['errors' => ['form' => 'Something went wrong. Please try again later.']]);
        exit;
    }
} catch (PDOException $e) {
    error_log($e->getMessage());
    echo json_encode(['errors' => ['server' => 'Server error. Please try again later.']]);
    exit;
}
?>