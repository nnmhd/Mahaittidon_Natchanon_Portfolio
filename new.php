<?php
session_start();
require_once('includes/connect.php');
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = $_POST['project_name'];
    $client_name = trim($_POST['company_name']);
    $skill_id = isset($_POST['skill_id']) ? $_POST['skill_id'] : null;
    $industry = isset($_POST['industry']) ? $_POST['industry'] : null;
    $project_url = $_POST['project_url'];
    $completion_year = intval($_POST['completion_year']);
    $skill_id = isset($_POST['skill_id']) ? $_POST['skill_id'] : null;
    $role = $_POST['role'];
    $stack = $_POST['stack'];
    $desc_subhead = $_POST['desc_subhead'];
    $desc_headline = $_POST['desc_headline'];
    $desc_tag = $_POST['desc_tag'];
    $desc_brief = $_POST['desc_brief'];
    $desc_audiences = $_POST['desc_audiences'];
    $desc_challenge = isset($_POST['desc_challenge']) ? $_POST['desc_challenge'] : '';
    $desc_direction = $_POST['desc_direction'];
    $desc_process_1 = $_POST['desc_process_1'];
    $desc_process_2 = $_POST['desc_process_2'];
    $desc_process_3 = $_POST['desc_process_3'];
    $desc_hl_thought = isset($_POST['desc_hl_thought']) ? $_POST['desc_hl_thought'] : '';

    $status = '0';
    if (!empty($project_name) && !empty($client_name) && !empty($project_url) && !empty($completion_year)) {
        $status = '1';
    }

    try {
        $client_sql = "SELECT client_id FROM clients WHERE company_name = :company_name AND industry = :industry LIMIT 1";
        $client_stmt = $connect->prepare($client_sql);
        $client_stmt->bindParam(':company_name', $client_name);
        $client_stmt->bindParam(':industry', $industry);
        $client_stmt->execute();
        $client = $client_stmt->fetch(PDO::FETCH_ASSOC);

        if ($client) {
            $client_id = $client['client_id'];
        } else {
            $insert_client_sql = "INSERT INTO clients (company_name, industry) VALUES (:company_name, :industry)";
            $insert_client_stmt = $connect->prepare($insert_client_sql);
            $insert_client_stmt->bindParam(':company_name', $client_name);
            $insert_client_stmt->bindParam(':industry', $industry);
            $insert_client_stmt->execute();
            $client_id = $connect->lastInsertId();
        }

        $sql = "INSERT INTO project (
            project_name, client_id, project_url, completion_year, skill_id, role, stack, 
            desc_subhead, desc_headline, desc_tag, desc_brief, desc_audiences, 
            desc_challenge, desc_direction, desc_process_1, desc_process_2, desc_process_3, 
            desc_hl_thought, post_status
        ) VALUES (
            :project_name, :client_id, :project_url, :completion_year, :skill_id, :role, :stack,
            :desc_subhead, :desc_headline, :desc_tag, :desc_brief, :desc_audiences,
            :desc_challenge, :desc_direction, :desc_process_1, :desc_process_2, :desc_process_3,
            :desc_hl_thought, :post_status
        )";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':project_name', $project_name);
        $stmt->bindParam(':client_id', $client_id, PDO::PARAM_INT);
        $stmt->bindParam(':project_url', $project_url);
        $stmt->bindParam(':completion_year', $completion_year, PDO::PARAM_INT);
        $stmt->bindParam(':skill_id', $skill_id, PDO::PARAM_INT);
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
        $stmt->bindParam(':post_status', $status);

        $stmt->execute();

        echo "Project created successfully!";
        header("Location: index.php");
        exit();
    } catch (PDOException $e) {
        die("Creation failed: " . $e->getMessage());
    }

    if ($stmt->execute()) {
        echo "<script>alert('Project created successfully!'); window.location.href = 'new.php';</script>";
        exit();
    } else {
        echo "<script>alert('Failed to create project.');</script>";
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
    <section id="create-form" class="grid-con">
    <div id="home__back__box" class="col-span-full">
    <a href="index.php">Home</a>
    <a href="update.php">Back to Project</a>
    </div>
    


    <form class="col-span-full" name="create_project" method="post" action="new.php" enctype="multipart/form-data">
        <table border="0">
            <tr>
            <td>Project Name</td>
            <td><input type="text" name="project_name"></td>
            </tr>
            <tr>
            <td>Client</td>
            <td><input type="text" name="company_name"></td>
            </tr>
            <tr>
            <td>Industry</td>
            <td><input type="text" name="industry"></td>
            </tr>
            <tr>
            <td>Project URL</td>
            <td><input type="text" name="project_url"></td>
            </tr>
            <tr>
            <td>Completion Year</td>
            <td><input type="text" name="completion_year"></td>
            </tr>
            <tr>
            <td>Role</td>
            <td>
                <select name="role">
                <?php
                $skill_sql = "SELECT skill_id, skill_name FROM skills";
                $skill_stmt = $connect->prepare($skill_sql);
                try {
                    $skill_stmt->execute();
                } catch (PDOException $e) {
                    die("Query failed: " . $e->getMessage());
                }
                while ($skill_row = $skill_stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='{$skill_row['skill_id']}'>{$skill_row['skill_name']}</option>";
                }
                ?>
                </select>
            </td>
            </tr>
            <tr>
            <td>Stack</td>
            <td><input type="text" name="stack"></td>
            </tr>
            <tr>
            <td>Description Headline</td>
            <td><input type="text" name="desc_headline"></td>
            </tr>
            <tr>
            <td>Description Subhead</td>
            <td><input type="text" name="desc_subhead"></td>
            </tr>
            <tr>
            <td>Description Tag</td>
            <td><input type="text" name="desc_tag"></td>
            </tr>
            <tr>
            <td>Image Main</td>
            <td>
                <input type="file" name="img_main" onchange="previewImage(event, 'img_main_preview'); displayFileSize(event, 'img_main_size')">
                <br><img id="img_main_preview" width="100" style="display:none;">
                <br><span id="img_main_size"></span>
                <br><button type="button" onclick="removeFile('img_main')">Remove File</button>
            </td>
            </tr>
            <tr>
            <td>Image Thumbnail</td>
            <td>
                <input type="file" name="img_thumbnail" onchange="previewImage(event, 'img_thumbnail_preview'); displayFileSize(event, 'img_thumbnail_size')">
                <br><img id="img_thumbnail_preview" width="100" style="display:none;">
                <br><span id="img_thumbnail_size"></span>
                <br><button type="button" onclick="removeFile('img_thumbnail')">Remove File</button>
            </td>
            </tr>
            <tr>
            <td>Image Card</td>
            <td>
                <input type="file" name="img_card" onchange="previewImage(event, 'img_card_preview'); displayFileSize(event, 'img_card_size')">
                <br><img id="img_card_preview" width="100" style="display:none;">
                <br><span id="img_card_size"></span>
                <br><button type="button" onclick="removeFile('img_card')">Remove File</button>
            </td>
            </tr>
            <tr>
            <td>Image Brief</td>
            <td>
                <input type="file" name="img_brief" onchange="previewImage(event, 'img_brief_preview'); displayFileSize(event, 'img_brief_size')">
                <br><img id="img_brief_preview" width="100" style="display:none;">
                <br><span id="img_brief_size"></span>
                <br><button type="button" onclick="removeFile('img_brief')">Remove File</button>
            </td>
            </tr>
            <tr>
            <td>Description Brief</td>
            <td><input type="text" name="desc_brief"></td>
            </tr>
            <tr>
            <td>Description Audiences</td>
            <td><input type="text" name="desc_audiences"></td>
            </tr>
            <tr>
            <td>Image Direction</td>
            <td>
                <input type="file" name="img_direction" onchange="previewImage(event, 'img_direction_preview'); displayFileSize(event, 'img_direction_size')">
                <br><img id="img_direction_preview" width="100" style="display:none;">
                <br><span id="img_direction_size"></span>
                <br><button type="button" onclick="removeFile('img_direction')">Remove File</button>
            </td>
            </tr>
            <tr>
            <td>Description Direction</td>
            <td><input type="text" name="desc_direction"></td>
            </tr>
            <tr>
            <td>Image Process</td>
            <td>
                <input type="file" name="img_process" onchange="previewImage(event, 'img_process_preview'); displayFileSize(event, 'img_process_size')">
                <br><img id="img_process_preview" width="100" style="display:none;">
                <br><span id="img_process_size"></span>
                <br><button type="button" onclick="removeFile('img_process')">Remove File</button>
            </td>
            </tr>
            <tr>
            <td>Description Process 1</td>
            <td><input type="text" name="desc_process_1"></td>
            </tr>
            <tr>
            <td>Description Process 2</td>
            <td><input type="text" name="desc_process_2"></td>
            </tr>
            <tr>
            <td>Description Process 3</td>
            <td><input type="text" name="desc_process_3"></td>
            </tr>
            <tr>
            <td>Image Result</td>
            <td>
                <input type="file" name="img_result" onchange="previewImage(event, 'img_result_preview'); displayFileSize(event, 'img_result_size')">
                <br><img id="img_result_preview" width="100" style="display:none;">
                <br><span id="img_result_size"></span>
                <br><button type="button" onclick="removeFile('img_result')">Remove File</button>
            </td>
            </tr>
            <tr id="createBtn">
                <td></td>
            <td><input type="submit" name="create" value="Create" onclick="return confirm('Are you sure you want to create this project?');"></td>
            </tr>
        </table>
    </form>

    </section>

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

    <script>
    function displayFileSize(event, sizeId) {
        var file = event.target.files[0];
        if (file) {
        var size = (file.size / 1024).toFixed(2) + ' KB';
        document.getElementById(sizeId).innerText = 'File size: ' + size;
        }
    }
    </script>
    </form>

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
</body>
</html>
