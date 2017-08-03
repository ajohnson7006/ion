<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)

This page is designed around showcasing the employees of the company.
The details should include:
1) Engineers Name
2) Highlights about the Skill Sets
3) Availability for taking on new work.


-->

<?php
//Adding in the standard include statements.
include "./functions.php";



//Declaring variables used on the page.
$EmployeeName = "Andrew Johnson";
$BioTravelComments = "Testing Comment";

 ?>

<html>
	<head>
		<title>Andrew Johnson</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
<?php
website_header();
?>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Andrew Johnson</h2>
					<p>Skills and Profile</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section>
								<h3>About Me</h3>
								<p>Feugiat amet accumsan ante aliquet feugiat accumsan. Ante blandit accumsan eu amet tortor non lorem felis semper. Interdum adipiscing orci feugiat penatibus adipiscing col cubilia lorem ipsum dolor sit amet feugiat consequat.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
							<hr />
							<section>
								<h3>Ante sed commodo</h3>
								<ul class="alt">
									<li><a href="#">Erat blandit risus vis adipiscing</a></li>
									<li><a href="#">Tempus ultricies faucibus amet</a></li>
									<li><a href="#">Arcu commodo non adipiscing quis</a></li>
									<li><a href="#">Accumsan vis lacinia semper</a></li>
								</ul>
							</section>
						</div>
						<div class="8u skel-cell-important">
							<section>
								<h2>About Me</h2>
								<!-- This next link should contain an image of the engineer. -->
								<a href="#" class="image fit"><img src="images/pic03.jpg" alt="Andrew Johnson" /></a>
								<p>
									This could be a long section. It should be a general paragraph about the user.
								</p>
						</section>
						</div>
					</div>
					<hr class="major" />
				  <div class="row">
				    <div class="6u">
				      <section class="special">
				        <a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
				        <h3>Technology</h3>
				        <p>
				          Bio About Technology </br>
				          Bio About Technology </br>
				          Bio About Technology </br>
				          Bio About Technology </br>
				        </p>
				        <ul class="actions">
				          <li><a href="#" class="button alt">Learn More</a></li>
				        </ul>
				      </section>
				    </div>
				    <div class="6u">
				      <section class="special">
				        <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
				        <h3>Travel Function</h3>
				        <p>
				        </br>
				          Bio About Travel </br>
				          Bio About Travel </br>
				          Bio About Travel </br>
				        </p>
				        <ul class="actions">
				          <li><a href="#" class="button alt">Learn More</a></li>
				        </ul>
				      </section>
				    </div>
				  </div>
				</div>
			</section>

		<!-- Footer -->
<?php
	include "./footer.php"
?>

	</body>
</html>
