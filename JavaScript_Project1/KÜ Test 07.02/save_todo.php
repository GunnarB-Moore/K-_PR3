<?php
// Verbindung zur Datenbank herstellen 
$servername = "localhost";
$username = " root@localhost"; //  MySQL-Benutzername bzw.phpmyadmin
$password = ""; // Mein SQL-Passwort; leer damit Zugriff frei
$dbname = "to-do-liste"; // Der Name meinerr Datenbank

// Daten aus dem POST-Array abrufen
$todoName = $_POST['todoName'];
$dueDate = $_POST['dueDate'];

// DB-Verbindung zherstellen und Daten einfügen
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

$sql = "INSERT INTO Todo (bezeichnung, faelligkeit) VALUES ('$todoName', '$dueDate')";

if ($conn->query($sql) === TRUE) {
    echo "To-Do erfolgreich gespeichert!";
} else {
    echo "Fehler beim Speichern des To-Dos: " . $conn->error;
}

$conn->close();

