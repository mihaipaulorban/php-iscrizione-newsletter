<?php
session_start();

// Funzione per Validare la mail
function validaEmail($email)
{
    // Controlla se la mail ha chiocciola e punto
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && strpos($email, '.') !== false) {
        $_SESSION['email'] = $email;
        header('Location: thankyou.php');
        exit();
    } else {
        return '<div class="alert alert-danger" role="alert">Errore: la mail NON contiene un punto e una chiocciola.</div>';
    }
}
