<?php

session_start();
require_once('includes/connect.php');
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}

if (!$connect) {
    die("<script>console.error('Database connection failed!');</script>");
} else {
    echo "<script>console.log('Database connected successfully!');</script>";
}

$sql = "SELECT * FROM project";
$stmt = $connect->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete'])) {
        $projectId = $_POST['project_id'];

        $deleteSql = "DELETE FROM project WHERE project_id = :project_id";
        $deleteStmt = $connect->prepare($deleteSql);
        $deleteStmt->bindParam(':project_id', $projectId);

        if ($deleteStmt->execute()) {
            echo "<script>alert('Project deleted successfully!'); window.location.href = 'update.php';</script>";
            exit();
        } else {
            echo "<script>alert('Failed to delete project.');</script>";
        }
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
    <section id="project-list" class="grid-con" >
    <h1>Project List</h1>
    <div id="create__logout__box">
    <a  href="new.php"><button id="createBtn">Create New Project</button></a>
    <a href="logout.php">Logout</a>
    </div>

    <table>
        <tbody>
        <?php foreach ($rows as $row): ?>
        <tr>
         <td ><?php echo htmlspecialchars($row['project_name']); ?></td>
        <td class="actionsBox">
        <a href="project.php?id=<?php echo $row['project_id']; ?>">Go to Project</a>
            <a href="edit.php?id=<?php echo $row['project_id']; ?>">Edit</a>
                <form method="POST" action="">

                    <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this project?');">Delete</button>
                </form>

        </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
            </section>
</body>
</html>