<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)

This page is designed to contain all the functions used within the page.
The idea is to keep the page uniform as much as possible and prevent deviation from
areas of the code that should remain the same across the site.

-->



<?php


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
        <li><a href="#">Contact Us</a></li>
        <!-- <li><a href="left-sidebar.html">Left Sidebar</a></li>    -->
        <!-- <<li><a href="right-sidebar.html">Right Sidebar</a></li> -->
        <!-- <li><a href="no-sidebar.html">No Sidebar</a></li>        -->
        <li><a href="#" class="button special">Sign Up</a></li>
      </ul>
    </nav>
  </header>
</html>

'; //End Echo Statement of the header code.

} //End website_header function.


function TechTravel (){
$BioTravelComments = shift;
  echo '
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
          <?php
          if isset($BioTravelComments){
            echo $BioTravelComments;
          } else
            echo "WHY ARE YOU NOT WORKING?!?!";
          }
          echo "I HATE YOU.";
        ?>
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
';
}


function test(){
  $BioTravelComments = $_SESSION['BioTravelComments'];
  //if isset($BioTravelComments){
  if (1==1){
    echo $BioTravelComments;
  } else {
    echo "WHY ARE YOU NOT WORKING?!?!";
  }
  echo "I HATE YOU.";
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
