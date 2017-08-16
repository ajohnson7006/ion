<!DOCTYPE HTML>
<?php
//Information About the Page.
//This is the main landing page for the website. It contains the
//high level summary of what the company is about.
?>


<?php // Start page content.
//functions.php is the primary file for functions.
//It should be included into every page.
include "./functions.php";
website_header(); //This is the function to control all the header information.
?>

<html>
	<body id="top">
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>The Tech and Travel Group</h2>
					<p>Where Technology and Global Communication Collaborate </p>
					<ul class="actions">
<!--
						<li><a href="#content" class="button big special">Sign Up</a></li>
						<li><a href="#elements" class="button big alt">Learn More</a></li>
-->
					</ul>
				</div>
			</section>

	<!-- Zero -->
			<section id="one" class="wrapper style1">
				<header class="major">
					<h2>What We Stand For</h2>
					<p>&nbsp;</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
<!--								<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a> -->
								<i class="icon fa-area-chart major"></i>
								<h3>Item One</h3>
								<p>
									Item One
								</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<!--<i class="icon fa-refresh major"></i>-->
								<!-- <a href="#" class="image fit"><img src="images/something.jpg" alt=""/></a> -->
								<i class="icon fa-area-chart major"></i>
								<h3><a href="#"> Item Two </a></h3>
								<p>
									Item Two
								</p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<i class="icon fa-area-chart major"></i>
								<h3>Item Three</h3>
								<p>
									Item Three
								</p>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2>Where The Technology Meets The Travel</h2>
					<!-- <p>Amet nisi nunc lorem accumsan</p> -->
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<!-- Free Image Location:
								https://static.pexels.com/photos/50711/board-electronics-computer-data-processing-50711.jpeg
							  -->
								<a href="#" class="image fit"><img src="images/board680x308.jpg" alt="" height="300" width="680" /></a>
								<h3>Technology</h3>
								<p>
									Today the world is known for advancing technology with its ability to
									achieve ideas once only dreamt about. Currently, The Tech and Travel Group
									specializes in Software Quality Assurance Engineering, Global Team Leadership,
									and several other diverse skill sets.
									<br>
									<br>
								</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Read More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/BalconyOcean680x308.jpg" alt="" height="300" width="680"/></a>
								<h3>Travel</h3>
								<p>
									With the technological advances, we are now able to work via the
									internet from almost anywhere. This feat has enabled the ability
									to work in both developed nations, and up and coming countries
									-- a core component in the common goal of connecting all people of the globe.
									<br>
								</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Read More</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>

<?php
/* This section of the code is not used at this time.
		<!-- Three -->
			<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="8u">
							<section>
								<h2>Mollis ut adipiscing</h2>
								<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
								<p>Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>
							</section>
						</div>
						<div class="4u">
							<section>
								<h3>Magna massa blandit</h3>
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
					</div>
				</div>
			</section>
*/
?>

			<?php
			website_footer();
			?>

	</body>
</html>
