<?php
include_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>Iscrizione Newsletter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Form -->
    <div class="form-signin text-center">
        <form action="index.php" method="get">
            <!-- Logo MAil -->
            <img class="mb-4" src="https://cdn-icons-png.flaticon.com/512/3178/3178158.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Iscrizione Newsletter</h1>
            <label for="email" class="sr-only">Indirizzo Email</label>
            <!-- input typoe text per email -->
            <input type="email" id="email" name="email" class="form-control" placeholder="Indirizzo email" required autofocus>

            <!-- Pulsante submit -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Iscriviti</button>
        </form>
        <?php
        if (isset($_GET['email'])) {
            echo validaEmail($_GET['email']);
        }
        ?>
    </div>
</body>

</html>