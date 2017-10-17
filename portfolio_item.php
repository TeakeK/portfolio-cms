<?php

# Laat alle data vanuit de $_GET variable/array zien
# print_r($_GET);

# Één van deze data heeft een "id" key, haal deze op en sla hem op
# in een variable
$id = $_GET['id'];

# De query die uitgevoerd moet worden is:
# SELECT title, body FROM portfolio_items WHERE id = $id

# Connect met de database
$pdo = new PDO('mysql:host=127.0.0.1;dbname=teakecms', 'root', '');

# Prepare de statement en execute
$itemsQuery = $pdo->prepare(
  "SELECT title, body FROM portfolio_items WHERE id = " . $id . ";"
);
$itemsQuery->execute();

# Maak er een array van afhankelijk of hij rijen terug geeft
$items = $itemsQuery->rowCount() ? $itemsQuery : [];

# Loop over de data set heen die je terug kreeg van de SELECT statement.
# Print de data individueel uit
foreach ($items as $item) {
  echo "<h1>" . $item["title"] . "</h1>";
  echo "<h3>" . $item["body"] . "</h3>";
}
?>

<a href="portfolio_item_delete.php?id=<?php echo $id?>">Verwijder Mij</a>
<a href="portfolio_item_edit.php?id=<?php echo $id?>">Edit Mij</a>
