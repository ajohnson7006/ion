<!DOCTYPE HTML>

<?php
/*
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)

This page is designed to contain all the functions used within the page.
The idea is to keep the page uniform as much as possible and prevent deviation from
areas of the code that should remain the same across the site.

*/






//This is the main header for all the pages in the website.
function website_header(){
//Begin Header code
echo '
<html>
	<head>
		<title>The Tech and Travel Group</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="Tech Travel QA Engineering AWS Amazon Web Services" />
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

<!-- Header -->
  <header id="header" class="skel-layers-fixed">
    <h1><a href="#">TGG</a></h1>
    <nav id="nav">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="mailto:TheTechandTravelGroup@gmail.com?Subject=Initial%20Contact" target="_top">Contact Us</a></li>
        <!-- <li><a href="left-sidebar.html">Left Sidebar</a></li>    -->
        <!-- <<li><a href="right-sidebar.html">Right Sidebar</a></li> -->
        <!-- <li><a href="no-sidebar.html">No Sidebar</a></li>        -->
        <!-- <li><a href="#" class="button special">Sign Up</a></li>  -->
      </ul>
    </nav>
  </header>
</html>

'; //End Echo Statement of the header code.
} //End website_header function.

function website_footer(){
  echo '
    <!-- Footer -->
      <footer id="footer">
        <div class="container">
          <!--
          <div class="row double">
            <div class="6u">
              <div class="row collapse-at-2">
                <div class="6u">
                  <h3>Topic One</h3>
                  <ul class="alt">
                    <li><a href="#">Link One</a></li>
                  </ul>
                </div>
                <div class="6u">
                  <h3>Topic Two</h3>
                  <ul class="alt">
                    <li><a href="#">Link Two</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="6u">
              <h2>Aliquam Interdum</h2>
              <p>
                This is a paragraph with something to do about the company. </br>
                This is a paragraph with something to do about the company. </br>
                This is a paragraph with something to do about the company. </br>
              </p>
              <ul class="icons">

                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
                <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>

              </ul>
            </div>
          </div>
          -->
          <ul class="copyright">
            <li>&copy; The Tech and Travel Group 2017. All rights reserved.</li>
          </ul>
        </div>
      </footer>
  ';
}



/*
//This is a function for Rina to learn.
function UhOh(){
  if ($RinaSkills < $function){
    echo "Study, Study, Study!!";
  }
}
*/
 ?>
