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
    <title>Teake Kastelein</title>
  </head>
  <body>
    <!-- Container Navigatie -->
    <section class="navigation">
      <div class="logo"></div>
      <nav>
    		<a href="index.html">Home</a>
      </nav>
    </section>
    <div class="container-portfolio">

  <section class="portfolio-item">
  <a class="back-button" href="index.html">back</a>

    <h1>Tipo Airmate</h1>
    <div class="item-info-wrapper">
    <div class="client">
      <span>Client</span><br>
      <p>Team tipo</p>
    </div>
    <div class="role">
      <span>Role</span><br>
      <p>Production, Design, Branding</p>
    </div>
    <div class="year">
      <span>Year</span><br>
      <p>2017</p>
    </div>
  </div>
  <img src="img/portfolio1.png" alt="">
  </section>

</div>


<section class="Call-to-action">
  <div class="previous">

  </div>
  <div class="next">

  </div>
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
