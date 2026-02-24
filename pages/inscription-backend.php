<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $interests = isset($_POST["interests"])
        ? implode(",", $_POST["interests"])
        : "";

    $id = bin2hex(random_bytes(16));
    $token = bin2hex(random_bytes(32));
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // "a" est utilisé pour ajouter sans effacer
    $file = fopen("bdd.csv", "a");

    fputcsv($file, [
        $id,
        $email,
        $hashedPassword,
        $interests,

    ], ";");

    fclose($file);


    // REDIRECTION
    header("location: accueil.php");
    exit(); // IMPORTANT
}

// pour intégrer le html dans le php
include("inscription.html");


// pour intégrer le php du mail dans le php
include("mail_inscription.php");
?>