<?php
session_start();
require_once('includes/connect.php');
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT project.*, clients.company_name, skills.skill_name 
        FROM project 
        LEFT JOIN clients ON project.client_id = clients.client_id 
        LEFT JOIN skills ON project.skill_id = skills.skill_id 
        WHERE project.project_id = :id";

$stmt = $connect->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC) ?: array(); 
    if (!$row) {
        die("Error: Project not found or SQL query failed.");
    }

if (isset($_POST['update'])) {
    $id = intval($_POST['id']);
    $project_name = $_POST['project_name'];
    $client_id = intval($_POST['client_id']);
    $project_url = $_POST['project_url'];
    $completion_year = intval($_POST['completion_year']);
    $skill_id = $_POST['skill_id'];
    $role = $_POST['role'];
    $stack = $_POST['stack'];
    $desc_subhead = $_POST['desc_subhead'];
    $desc_headline = $_POST['desc_headline'];
    $desc_tag = $_POST['desc_tag'];
    $desc_brief = $_POST['desc_brief'];
    $desc_audiences = $_POST['desc_audiences'];
    $desc_challenge = $_POST['desc_challenge'];
    $desc_direction = $_POST['desc_direction'];
    $desc_process_1 = $_POST['desc_process_1'];
    $desc_process_2 = $_POST['desc_process_2'];
    $desc_process_3 = $_POST['desc_process_3'];
    $desc_hl_thought = $_POST['desc_hl_thought'];

    try {
        $sql = "UPDATE project SET 
            project_name = :project_name, 
            client_id = :client_id, 
            project_url = :project_url,
            completion_year = :completion_year,
            skill_id = :skill_id,
            role = :role,
            stack = :stack,
            desc_subhead = :desc_subhead,
            desc_headline = :desc_headline,
            desc_tag = :desc_tag,
            desc_brief = :desc_brief,
            desc_audiences = :desc_audiences,
            desc_challenge = :desc_challenge,
            desc_direction = :desc_direction,
            desc_process_1 = :desc_process_1,
            desc_process_2 = :desc_process_2,
            desc_process_3 = :desc_process_3,
            desc_hl_thought = :desc_hl_thought
        WHERE project_id = :id";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':project_name', $project_name);
        $stmt->bindParam(':client_id', $client_id, PDO::PARAM_INT);
        $stmt->bindParam(':project_url', $project_url);
        $stmt->bindParam(':completion_year', $completion_year, PDO::PARAM_INT);
        $stmt->bindParam(':skill_id', $skill_id);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':stack', $stack);
        $stmt->bindParam(':desc_subhead', $desc_subhead);
        $stmt->bindParam(':desc_headline', $desc_headline);
        $stmt->bindParam(':desc_tag', $desc_tag);
        $stmt->bindParam(':desc_brief', $desc_brief);
        $stmt->bindParam(':desc_audiences', $desc_audiences);
        $stmt->bindParam(':desc_challenge', $desc_challenge);
        $stmt->bindParam(':desc_direction', $desc_direction);
        $stmt->bindParam(':desc_process_1', $desc_process_1);
        $stmt->bindParam(':desc_process_2', $desc_process_2);
        $stmt->bindParam(':desc_process_3', $desc_process_3);
        $stmt->bindParam(':desc_hl_thought', $desc_hl_thought);

        $stmt->execute();

        echo "Project updated successfully!";
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        die("Update failed: " . $e->getMessage());
    }
}
?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script defer src="https://kit.fontawesome.com/97e2f7a12f.js" crossorigin="anonymous"></script>
    <title>🚪</title>
</head>

<body>
    <section id="edit-form" class="grid-con" >
    <h1 class="col-span-full"><a  href="update.php">Back to Project List</a></h1>

    <form class="col-span-full" name="update_project" method="post" action="edit.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <table  border="0">
            <tr>
                <td>Project Name</td>
                <td><input type="text" name="project_name" value="<?php echo $row['project_name']; ?>"></td>
            </tr>
            <tr>
                <td>Client</td>
                <td>
                    <select name="client_id">
                        <?php
                        $client_sql = "SELECT client_id, company_name FROM clients";
                        $client_stmt = $connect->prepare($client_sql);
                        try {
                            $client_stmt->execute();
                        } catch (PDOException $e) {
                            die("Query failed: " . $e->getMessage());
                        }
                        while ($client_row = $client_stmt->fetch(PDO::FETCH_ASSOC)) {
                            $selected = ($client_row['client_id'] == $row['client_id']) ? 'selected' : '';
                            echo "<option value='{$client_row['client_id']}' $selected>{$client_row['company_name']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Project URL</td>
                <td><input type="text" name="project_url" value="<?php echo $row['project_url']; ?>"></td>
            </tr>
            <tr>
                <td>Completion Year</td>
                <td><input type="text" name="completion_year" value="<?php echo $row['completion_year']; ?>"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td>
                    <select name="skill_id">
                        <?php
                        $skill_sql = "SELECT skill_id, skill_name FROM skills";
                        $skill_stmt = $connect->prepare($skill_sql);
                        try {
                            $skill_stmt->execute();
                        } catch (PDOException $e) {
                            die("Query failed: " . $e->getMessage());
                        }
                        while ($skill_row = $skill_stmt->fetch(PDO::FETCH_ASSOC)) {
                            $selected = ($skill_row['skill_id'] == $row['skill_id']) ? 'selected' : '';
                            echo "<option value='{$skill_row['skill_id']}' $selected>{$skill_row['skill_name']}</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Stack</td>
                <td><input type="text" name="stack" value="<?php echo $row['stack']; ?>"></td>
            </tr>
            <tr>
                <td>Description Headline</td>
                <td><input type="text" name="desc_headline" value="<?php echo $row['desc_headline']; ?>"></td>
            </tr>
            <tr>
                <td>Description Subhead</td>
                <td><input type="text" name="desc_subhead" value="<?php echo $row['desc_subhead']; ?>"></td>
            </tr>
            <tr>
                <td>Description Tag</td>
                <td><input type="text" name="desc_tag" value="<?php echo $row['desc_tag']; ?>"></td>
            </tr>
            <tr>
                <td>Image Main</td>
                <td>
                    <?php if (!empty($row['img_main'])): ?>
                        <br><img id="img_main_preview" src="images/<?php echo $row['img_main']; ?>" width="100">
                    <?php else: ?>
                        <br><img id="img_main_preview" width="100" style="display:none;">
                    <?php endif; ?>
                    <input type="file" name="img_main" onchange="previewImage(event, 'img_main_preview')">
                    <button type="button" onclick="removeFile('img_main_preview')">Remove File</button>
                </td>
            </tr>
            <tr>
                <td>Image Thumbnail</td>
                <td>
                    <?php if (!empty($row['img_thumbnail'])): ?>
                        <br><img id="img_thumbnail_preview" src="images/<?php echo $row['img_thumbnail']; ?>" width="100">
                    <?php else: ?>
                        <br><img id="img_thumbnail_preview" width="100" style="display:none;">
                    <?php endif; ?>
                    <input type="file" name="img_thumbnail" onchange="previewImage(event, 'img_thumbnail_preview')">
                    <button type="button" onclick="removeFile('img_thumbnail')">Remove File</button>
                </td>
            </tr>
            <tr>
                <td>Image Card</td>
                <td>
                    <?php if (!empty($row['img_card'])): ?>
                        <br><img id="img_card_preview" src="images/<?php echo $row['img_card']; ?>" width="100">
                    <?php else: ?>
                        <br><img id="img_card_preview" width="100" style="display:none;">
                    <?php endif; ?>
                    <input type="file" name="img_card" onchange="previewImage(event, 'img_card_preview')"> <button type="button" onclick="removeFile('img_card')">Remove File</button>
                </td>
            </tr>
            <tr>
                <td>Image Brief</td>
                <td>
                    <?php if (!empty($row['img_brief'])): ?>
                        <br><img id="img_brief_preview" src="images/<?php echo $row['img_brief']; ?>" width="100">
                    <?php else: ?>
                        <br><img id="img_brief_preview" width="100" style="display:none;">
                    <?php endif; ?>
                    <input type="file" name="img_brief" onchange="previewImage(event, 'img_brief_preview')">
                    <button type="button" onclick="removeFile('img_brief')">Remove File</button>
                </td>
            </tr>
            <tr>
                <td >Description Brief</td>

                <td>
                    <textarea name="desc_brief" oninput="autoExpand(this)">
                        <?php echo htmlspecialchars($row['desc_brief']); ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Description Audiences</td>
                <td>
                    <textarea name="desc_audiences" oninput="autoExpand(this)">
                        <?php echo htmlspecialchars($row['desc_audiences']); ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Image Direction</td>
                <td>

                    <?php if (!empty($row['img_direction'])): ?>
                        <br><img id="img_direction_preview" src="images/<?php echo $row['img_direction']; ?>" width="100">
                    <?php else: ?>
                        <br><img id="img_direction_preview" width="100" style="display:none;">
                    <?php endif; ?>
                    <input type="file" name="img_direction" onchange="previewImage(event, 'img_direction_preview')"> <button type="button" onclick="removeFile('img_direction')">Remove File</button>
                </td>
            </tr>
            <tr>
                <td>Description Direction</td>
                <td>
                    <textarea name="desc_direction" oninput="autoExpand(this)">
                        <?php echo htmlspecialchars($row['desc_direction']); ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td>Image Process</td>
                <td>

                    <?php if (!empty($row['img_process'])): ?>
                        <br><img id="img_process_preview" src="images/<?php echo $row['img_process']; ?>" width="100">
                    <?php else: ?>
                        <br><img id="img_process_preview" width="100" style="display:none;">
                    <?php endif; ?>
                    <input type="file" name="img_process" onchange="previewImage(event, 'img_process_preview')">
                    <button type="button" onclick="removeFile('img_result')">Remove File</button>
                </td>
            </tr>
            <tr>
                <td>Description Process 1</td>
                <td><textarea name="desc_process_1" oninput="autoExpand(this)"><?php echo htmlspecialchars($row['desc_process_1']); ?></textarea></td>
            </tr>
            <tr>
                <td>Description Process 2</td>
                <td><textarea name="desc_process_2" oninput="autoExpand(this)"><?php echo htmlspecialchars($row['desc_process_2']); ?></textarea></td>
            </tr>
            <tr>
                <td>Description Process 3</td>
                <td><textarea name="desc_process_3" oninput="autoExpand(this)"><?php echo htmlspecialchars($row['desc_process_3']); ?></textarea></td>
            </tr>
            <tr>
                <td>Image Result</td>
                <td>
                    <?php if (!empty($row['img_result'])): ?>
                        <br><img id="img_result_preview" src="images/<?php echo $row['img_result']; ?>" width="100">
                    <?php else: ?>
                        <br><img id="img_result_preview" width="100" style="display:none;">
                        <input type="file" name="img_result" onchange="previewImage(event, 'img_result_preview')">
                    <?php endif; ?>
                    <input type="file" name="img_result" onchange="previewImage(event, 'img_result_preview')"> <button type="button" onclick="removeFile('img_result')">Remove File</button>
                </td>
            </tr>
<script>
function previewImage(event, previewId) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById(previewId);
        output.src = reader.result;
        output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

<script>
    function removeFile(inputName) {
        var input = document.querySelector('input[name="' + inputName + '"]');
        input.value = '';
        var preview = document.getElementById(inputName + '_preview');
        preview.style.display = 'none';
        var size = document.getElementById(inputName + '_size');
        size.innerText = '';
    }
    </script>
            <tr id="updateBtn">
                <td><input type="hidden" name="id" value="<?php echo $row['project_id']; ?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    </section>
</body>
</html>