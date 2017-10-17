<?php

  $id = $_GET['id'];

  # Connect met de database
  $pdo = new PDO('mysql:host=127.0.0.1;dbname=teakecms', 'root', '');

  # Prepare de statement en execute
  $itemsQuery = $pdo->prepare(
    "SELECT title, body FROM portfolio_items WHERE id = " . $id . ";"
  );
  $itemsQuery->execute();

  # Maak er een array van afhankelijk of hij rijen terug geeft
  $items = $itemsQuery->rowCount() ? $itemsQuery : [];

  $title = "";
  $body = "";

  # Loop over de data set heen die je terug kreeg van de SELECT statement.
  # Print de data individueel uit
  foreach ($items as $item) {
    $title = $item["title"];
    $body = $item["body"];
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="edit_portfolio_item" action="portfolio_item_process_editing.php?id=<?php echo $id; ?>" method="POST">
      <input type="text" name="title" value="<?php echo $title; ?>">
      <input type="text" name="body" value="<?php echo $body; ?>">
      <input type="submit" name="submit" value="Verzenden">
    </form>

  </body>
</html>
