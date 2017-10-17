<?php


$id = $_GET['id'];
$title = $_POST['title'];
$body = $_POST['body'];

# Connect met de database
$pdo = new PDO('mysql:host=127.0.0.1;dbname=teakecms', 'root', '');

# Prepare de statement en execute
$itemsQuery = $pdo->prepare(
  "UPDATE portfolio_items SET title = '$title', body = '$body' WHERE id = $id;"
);
$itemsQuery->execute();

header("Location: /portfolio_item.php?id=" . $id);
