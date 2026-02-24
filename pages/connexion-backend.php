<?php

$email = $_POST["email"];
$password = $_POST["password"];

$file = fopen("users.csv", "r");

while (($data = fgetcsv($file, 1000, ";")) !== false) {

    if ($data[1] === $email) {

        if ($data[3] != 1) {
            die("Compte non validé.");
        }

        if (password_verify($password, $data[2])) {
            echo "Connexion réussie";
        } else {
            echo "Mot de passe incorrect";
        }
        break;
    }
}

$_SESSION["user_id"] = $data[0];
$_SESSION["interests"] = $data[4];


fclose($file);


// pour intégrer le html dans le php
include("connexion.html");

?>