<?php
include 'dbh.php';
$response = array();

$sql = "SELECT * FROM `tijn_qrcodes` ORDER BY `title`";
$statement = $conn->prepare($sql);
$statement->execute();
$result = $statement->get_result();

// In HTML steken om terug te sturen
$html = '<table class="table table-striped">
<thead>
<tr>
<th>QR-code</th>
<th>Naam</th>
<th>Beschrijving</th>
<th>Tijdperk</th>
<th>Afbeelding</th>
<th>Acties</th>
</tr>
</thead>
<tbody>';

while ($row = $result->fetch_assoc()) {
    $html .= '<tr>
    <td><img src="' . htmlspecialchars($row["qr_code"]) . '" alt="QR-code afbeelding" style="width:100px;"></td>
    <td>' . htmlspecialchars($row["title"]) . '</td>
    <td>' . htmlspecialchars_decode($row["content"]) . '</td>
    <td>' . htmlspecialchars($row["era"]) . '</td>
    <td><img src="' . htmlspecialchars($row["image"]) . '" alt="QR-code afbeelding" style="width:100px;"></td>
    <td>
        <button class="btn btn-success btn-sm" title="Downloaden"><i class="fas fa-download"></i></button>
<a href="includes/edit-museumstuk.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm" title="Bewerken"><i class="fas fa-edit"></i></a>
        <button class="btn btn-info btn-sm" title="Kopiëren" onclick="duplicate(\'' . $row['title'] . '\',\'' . $row['era'] . '\',\'' . $row['image'] . '\',\'' . $row['content'] . '\',\'' . $row['qr_code'] . '\')"><i class="fas fa-copy"></i></button>
        <button class="btn btn-danger btn-sm" title="Verwijderen" onclick="trash(\'' . $row['id'] . '\')"><i class="fas fa-trash"></i></button>
    </td>
    </tr>';
}

$html .= '</tbody></table>';

$response['html'] = $html;
echo json_encode($response);
?>
