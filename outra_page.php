<?php
    session_start();
    $email = $_SESSION["email"];
    echo "Bem Vindo, $email";
?>