<?php
session_start();
require_once('includes/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST['user_name'];
    $password = $_POST['user_password'];

    $sql = "SELECT * FROM users WHERE user_name = :user_name";
    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':user_name', $userName);
    $stmt->execute();
    $userData = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($userData) {
        echo "<script>console.log('DB Username:', '" . $userData['user_name'] . "');</script>";
        echo "<script>console.log('DB Password:', '" . $userData['user_password'] . "');</script>";
    }

    if ($userData && $password === $userData['user_password']) {
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['user_name'] = $userData['user_name'];

        echo "<script>console.log('Session User ID:', '" . $_SESSION['user_id'] . "');</script>";
        echo "<script>console.log('Session User Name:', '" . $_SESSION['user_name'] . "');</script>";

        header("Location: update.php");
        exit();
    } else {
        echo "<script>alert('Invalid username or password!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script defer src="https://kit.fontawesome.com/97e2f7a12f.js" crossorigin="anonymous"></script>
    <title>🚪</title>
</head>
<body>
    <section id="login-form" class="grid-con" >
    <form method="post" action="">
        <label>User</label>
        <input type="text" name="user_name" required><br><br>
        <label>Password</label>
        <input type="password" name="user_password" required><br><br>
        <button type="submit">Login</button>
    </form>
    </section>
</body>
</html>