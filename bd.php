<?php
$database = "test.mdb";
$conn = new PDO("odbc:Driver={Microsoft Access Driver (*.mdb)};Dbq=$database;Uid=;Pwd=;");

$query = "SELECT * FROM votre_table WHERE votre_colonne = :valeur";
$stmt = $conn->prepare($query);
$stmt->bindParam(':valeur', $_GET['valeur']);
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($results);
?>
