<?php
# Connect met de database
$pdo = new PDO('mysql:host=127.0.0.1;dbname=teakecms', 'root', '');

#Koppel URL aan variabele
$id = $_GET['id'];

# Prepare de statement en execute
$itemsQuery = $pdo->prepare(
 "DELETE FROM portfolio_items WHERE id = " . $id . ";"
);
$itemsQuery->execute();

#print_r($itemsQuery);
header('Location: /');
