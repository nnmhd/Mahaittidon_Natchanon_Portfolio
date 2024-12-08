<?php
require_once('connect.php');
$query = "SELECT p.project_id, c.company_name, p.desc_subhead, p.desc_brief, p.desc_headline, p.desc_tag, p.img_card, p.img_thumbnail FROM project AS p INNER JOIN clients AS c ON p.client_id = c.client_id";
$results = mysqli_query($connect,$query);

if ($results->num_rows > 0) {
    $projects = array();
    while ($row = $results->fetch_assoc()) {
        $projects[$row['project_id']] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($projects);
} else {
    echo json_encode([]);
}

mysqli_close($connect);
?>