<?php
include 'db_connection.php'; // Verbinding met de database


// Ontvang gegevens van het registratieformulier
$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];
$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

// Voeg gegevens toe aan de database
$sql = "INSERT INTO studenten (voornaam, achternaam, gebruikersnaam, wachtwoord) VALUES ('$voornaam', '$achternaam', '$gebruikersnaam', '$wachtwoord')";

if ($conn->query($sql) === TRUE) {
    echo "Registratie succesvol!";
} else {
    echo "Fout bij registratie: " . $conn->error;
}

$conn->close();
?>