<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pagina</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<?php
include './js/NewQR.php'
?>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">QR-code Beheer</h1>
        <a href="./includes/qr-code-add.php" onclick="NewQR()" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Nieuwe QR-code aanmaken
        </a>

        <table id="textfield" class="table table-striped">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Voorbeeld QR-code</td>
                    <td>
                        <button class="btn btn-success btn-sm" title="Downloaden">
                            <i class="fas fa-download"></i>
                        </button>
                        <button class="btn btn-warning btn-sm" title="Bewerken">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-info btn-sm" title="Kopiëren">
                            <i class="fas fa-copy"></i>
                        </button>
                        <button class="btn btn-danger btn-sm" title="Verwijderen">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <!-- Meer QR-codes kunnen hier toegevoegd worden -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
