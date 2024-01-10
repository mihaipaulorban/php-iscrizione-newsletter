<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Iscrizione Newsletter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Form per l'email e pulsante submit -->
    <form action="index.php" method="get">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <button type="submit">Iscriviti</button>
    </form>

    <!-- Validazione email importata -->
    <?php
    if (isset($_GET['email'])) {
        echo validaEmail($_GET['email']);
    }
    ?>
</body>

</html>