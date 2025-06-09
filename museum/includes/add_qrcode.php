<?php
include './dbh.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title'] ?? '');
    $qrCode = $conn->real_escape_string($_POST['qr_code'] ?? '');
    $content = $conn->real_escape_string($_POST['content'] ?? '');
    $era = $conn->real_escape_string($_POST['era'] ?? '');
    $image = $conn->real_escape_string($_POST['image'] ?? '');

    // UUID genereren
    function generateUUIDv4() {
        $data = random_bytes(16);
        $data[6] = chr((ord($data[6]) & 0x0f) | 0x40);
        $data[8] = chr((ord($data[8]) & 0x3f) | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
    $id = generateUUIDv4();

    // Invoegen in de database
    $sql = "INSERT INTO tijn_qrcodes (`qr_code`, `title`, `content`, `era`, `image`, `id`) 
            VALUES ('$qrCode', '$title', '$content', '$era', '$image', '$id')";

    if ($conn->query($sql) === TRUE) {
        // Redirect naar succespagina (optioneel)
        header("Location: ../admin.php");
        exit();
    } else {
        echo "Fout bij opslaan: " . $conn->error;
    }
} else {
    echo "Geen geldige POST-aanvraag.";
}
?>
