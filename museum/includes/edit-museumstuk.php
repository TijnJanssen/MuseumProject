<?php
include './dbh.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submission to update museum piece
    $id = $conn->real_escape_string($_POST['id'] ?? '');
    $title = $conn->real_escape_string($_POST['title'] ?? '');
    $qrCode = $conn->real_escape_string($_POST['qr_code'] ?? '');
    $content = $conn->real_escape_string($_POST['content'] ?? '');
    $era = $conn->real_escape_string($_POST['era'] ?? '');
    $image = $conn->real_escape_string($_POST['image'] ?? '');

    $sql = "UPDATE tijn_qrcodes SET 
                title = '$title',
                qr_code = '$qrCode',
                content = '$content',
                era = '$era',
                image = '$image'
            WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin.php");
        exit();
    } else {
        echo "Fout bij bijwerken: " . $conn->error;
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    // Display form pre-filled with museum piece data
    $id = $conn->real_escape_string($_GET['id']);
    $sql = "SELECT * FROM tijn_qrcodes WHERE id = '$id' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = htmlspecialchars($row['title']);
        $qrCode = htmlspecialchars($row['qr_code']);
        $content = htmlspecialchars($row['content']);
        $era = htmlspecialchars($row['era']);
        $image = htmlspecialchars($row['image']);
    } else {
        echo "Museumstuk niet gevonden.";
        exit();
    }
} else {
    echo "Ongeldige aanvraag.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Museumstuk Bewerken</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- Trumbowyg CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/ui/trumbowyg.min.css" />

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Museumstuk Bewerken</h1>

        <form method="POST" action="edit-museumstuk.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />

            <div class="mb-3">
                <label for="qrTitle" class="form-label">Titel</label>
                <input type="text" class="form-control" id="qrTitle" name="title" value="<?php echo $title; ?>" required />
            </div>

            <div class="mb-3">
                <label for="qrImage" class="form-label">QR-code URL</label>
                <input type="text" class="form-control" id="qrImage" name="qr_code" value="<?php echo $qrCode; ?>" required />
            </div>

            <div class="mb-3">
                <label for="qrText" class="form-label">Tekst</label>
                <textarea id="qrText" name="content" class="form-control" required><?php echo $content; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="qrEra" class="form-label">Tijdperk</label>
                <select id="qrEra" name="era" class="form-select" required>
                    <option value="prehistorie" <?php if ($era === 'prehistorie') echo 'selected'; ?>>Prehistorie</option>
                    <option value="oudheid" <?php if ($era === 'oudheid') echo 'selected'; ?>>Oudheid</option>
                    <option value="middeleeuwen" <?php if ($era === 'middeleeuwen') echo 'selected'; ?>>Middeleeuwen</option>
                    <option value="vroegmoderne-tijd" <?php if ($era === 'vroegmoderne-tijd') echo 'selected'; ?>>Vroegmoderne Tijd</option>
                    <option value="moderne-tijd" <?php if ($era === 'moderne-tijd') echo 'selected'; ?>>Moderne Tijd</option>
                    <option value="hedendaagse-tijd" <?php if ($era === 'hedendaagse-tijd') echo 'selected'; ?>>Hedendaagse Tijd</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="Image" class="form-label">Afbeelding URL</label>
                <input type="text" class="form-control" id="Image" name="image" value="<?php echo $image; ?>" required />
            </div>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Opslaan
            </button>
        </form>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Trumbowyg JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/trumbowyg.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            $('#qrText').trumbowyg();
        });
    </script>
</body>

</html>
