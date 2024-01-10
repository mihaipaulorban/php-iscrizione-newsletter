<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Iscrizione Newsletter</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php

    // Verifica della mail
    if (isset($_GET['email'])) {
        $email = $_GET['email'];

        // controlla se ha una chiocciola e se ha il punto
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, '.') !== false) {
            echo '<div class="alert alert-success" role="alert">Successo: la mail contiene un punto e una chiocciola.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Errore: la mail NON contiene un punto e una chiocciola.</div>';
        }
    }
    ?>

    <!-- Form per l'email e pulsante submit -->
    <form action="index.php" method="get">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <button type="submit">Iscriviti</button>
    </form>
</body>

</html>