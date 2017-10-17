<?php
# Connect met de database
$pdo = new PDO('mysql:host=127.0.0.1;dbname=teakecms', 'root', '');

# Prepare de statement en execute
$itemsQuery = $pdo->prepare(
  "SELECT id, title, body FROM portfolio_items;"
);
$itemsQuery->execute();

# Maak er een array van afhankelijk of hij rijen terug geeft
$items = $itemsQuery->rowCount() ? $itemsQuery : [];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Teake Kastelein</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Teake" />
		<link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i|Roboto" rel="stylesheet">
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--><script>document.documentElement.className = 'js';</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		 <script src="js/jquery.scrollify.min.js"></script>
    <title>Teake Kastelein</title>
		<script>
		$(function() {
			$.scrollify({
				section : ".thumbnail"
			});
		});
		</script>
  </head>
  <body>
    <!-- Container Navigatie -->
    <section class="navigation">
      <div class="logo"></div>
      <nav>
    		<a href="about.html">Profile</a>
      </nav>
    </section>

    <!-- Section voor gegroepeerde content -->

      <!-- Container - positionering tekst -->
      <?php
        $count = 1;
        foreach ($items as $item):
      ?>
        <section class="thumbnail">
          <div class="tumbnail-tekst">
              <span class="inc">0<?php echo $count; ?></span>
              <h1><a href="portfolio_item.php?id=<?php echo $item['id']?>"> <?php echo $item['title']; ?> </a></h1>
              <p><?php echo $item['body']; ?></p>
          </div>
      </section>
      <?php
        $count++;
        endforeach;
      ?>

    <section class="slider">
      <ul>
        <li>item 1</li>
        <li>item 2</li>
        <li>item 3</li>
        <li>item 4</li>
      </ul>
      <div class="slider-controller"></div>
    </section>

    <footer>teakedesign@gmail.com</footer>

  </body>
	<script src="js/anime.min.js"></script>
	<script src="js/main.js"></script>
	<script>
	(function() {
		var lineMaker = new LineMaker({
				position: 'fixed',

				lines: [
					{top: 0, left: '115px', width: 1, height: '100vh', color: '#e5e5e5', hidden: true, animation: { duration: 3000, easing: 'easeInOutExpo', delay: 0, direction: 'TopBottom' }},
					{top: '140px', left: '0%', width: '115px', height: 1, color: '#e5e5e5', hidden: true, animation: { duration: 2000, easing: 'easeInOutSine', delay: 300, direction: 'LeftRight' }}
				]
		});

	setTimeout(function() {
			lineMaker.animateLinesIn();
		}, 500);

	})();


	</script>
</html>
