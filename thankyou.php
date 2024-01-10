<?php
// Includo le funzioni
include_once 'functions.php';

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Grazie!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <style>
        /* Body della pagina di ringraziamento */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #28a745;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        .container {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Grazie per la tua iscrizione!</h1>
        <!-- Display della mail utilizzata -->
        <p>Ti sei iscritto con l'email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    </div>
</body>

</html>