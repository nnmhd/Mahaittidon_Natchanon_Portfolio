<?php
require_once('connect.php');

$query = "SELECT p.project_id, c.company_name, p.desc_subhead, p.desc_brief, 
                 p.desc_headline, p.desc_tag, p.img_card, p.img_thumbnail 
          FROM project AS p 
          INNER JOIN clients AS c ON p.client_id = c.client_id";

$stmt = $connect->prepare($query);
$stmt->execute();
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');

if ($projects) {
    echo json_encode($projects);
} else {
    echo json_encode([]);
}
?>