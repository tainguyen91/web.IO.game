<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Elements - Projection by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
		<header id="header">
			<div class="inner">
				<a href="index.html" class="logo"><strong>Projection</strong> by CPSC 362 Group D</a>
				<nav id="nav">
						<a href="index.php">Home</a>
						<a href="game.php">Game</a>
						<a href="about.php">About</a>
				</nav>
				<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
			</div>
		</header>


		<!-- Main -->
			<section id="main" class="wrapper">
<?php
include "conn.php";

$sql = "SELECT * FROM testnow";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["Name"]."<br>";
  }
} else {
  echo "0 results";
}

if(isset($_POST['name'])){
	$sql = "INSERT INTO testnow (Name) VALUES ('".$_POST['name']."')";
	var_dump($sql);
 $conn->query($sql);
}

$conn->close();



?>

				<div class="inner">
					<header class="align-center">
						<h2>Intro</h2>
					</header>

					<!-- Intro -->
						<h2>What is IO game?</h2>
						<p> The most comprehensive definition of an io game we’ve come up with is that an io game is a free to play, browser-based, casual game which has a multiplayer component, very few mechanisms, and minimalist graphics. This definition may sound broad but if you use it as a checklist when evaluating a game, the truth becomes clear.</a>.</p>

						<hr class="major" />

					<!-- Content -->
						<h2 id="content"> Content</h2>
						<p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing.</p>
						<div class="row">
							<!-- Break -->
							<div class="4u 12u$(medium)">
								<h3>Interdum sapien gravida</h3>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							</div>
							<div class="4u 12u$(medium)">
								<h3>Faucibus consequat lorem</h3>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							</div>
							<div class="4u$ 12u$(medium)">
								<h3>Accumsan montes viverra</h3>
								<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							</div>
						</div>

					<hr class="major" />

				</div>

			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="elements.php" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Untitled. Design: CPSC-362 Group D. Images: Cal State University, Fullerton.
					</div>
					
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>