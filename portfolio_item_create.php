<?php


$title = $_POST['title'];
$body = $_POST['body'];

# Connect met de database
$pdo = new PDO('mysql:host=127.0.0.1;dbname=teakecms', 'root', '');

# Prepare de statement en execute
$itemsQuery = $pdo->prepare(
 "INSERT INTO portfolio_items (title, body) VALUES ('$title', '$body');"
);
$itemsQuery->execute();

header('Location: /');
