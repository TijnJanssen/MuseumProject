<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR-code Toevoegen</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Trumbowyg CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.26.0/ui/trumbowyg.min.css">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">QR-code Toevoegen</h1>


        <form method="POST" action="add_qrcode.php">
            <!-- Titel ingeven -->
            <div class="mb-3">
                <label for="qrTitle" class="form-label">Titel</label>
                <input type="text" class="form-control" id="qrTitle" name="title" placeholder="Voer een titel in" required>
            </div>

            <!-- QR-code URL -->
            <div class="mb-3">
                <label for="qrImage" class="form-label">QR-code URL</label>
                <input type="text" class="form-control" id="qrImage" name="qr_code" placeholder="Voer de URL van de QR-code in" required>
            </div>

            <!-- Tekst Editor -->
            <div class="mb-3">
                <label for="qrText" class="form-label">Tekst</label>
                <textarea id="qrText" name="content" class="form-control" required></textarea>
            </div>

            <!-- Tijdperk selecteren -->
            <div class="mb-3">
                <label for="qrEra" class="form-label">Tijdperk</label>
                <select id="qrEra" name="era" class="form-select" required>
                    
                    <option value="prehistorie">Prehistorie</option>
                    <option value="oudheid">Oudheid</option>
                    <option value="middeleeuwen">Middeleeuwen</option>
                    <option value="vroegmoderne-tijd">Vroegmoderne Tijd</option>
                    <option value="moderne-tijd">Moderne Tijd</option>
                    <option value="hedendaagse-tijd">Hedendaagse Tijd</option>
                </select>
            </div>

            <!-- Afbeelding URL -->
            <div class="mb-3">
                <label for="Image" class="form-label">Afbeelding URL</label>
                <input type="text" class="form-control" id="Image" name="image" placeholder="Voer de URL van de afbeelding in" required>
            </div>

            <!-- Opslaan knop -->
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
