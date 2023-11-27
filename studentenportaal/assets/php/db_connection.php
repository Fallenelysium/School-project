<?php
$servername = "jouw_hostnaam";
$username = "jouw_gebruikersnaam";
$password = "jouw_wachtwoord";
$dbname = "studenten_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connectie mislukt: " . $conn->connect_error);
}

?>