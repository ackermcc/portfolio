<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <link rel="SHORTCUT ICON" href="favicon.jpg">
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Chad Ackerman | Digital Designer</title>

  <!-- style -->
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="symbolset/webfonts/ss-social-circle.css">

  <!-- js -->
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/waypoints.min.js"></script>
  <script type="text/javascript" src="js/chack.js"></script>
  <script type="text/javascript" src="js/dynamic-loading.js"></script>
  <script type="text/javascript" src="symbolset/webfonts/ss-social.js"></script>

</head>
<body>

<header>
	<img src="images/chad-ackerman-logo_03.png" alt="small-logo_03.png" />
	<div id="nav">
		<div>
			About
		</div>
		<div>
			Work
		</div>
		<div>
			Contact
		</div>
	</div>
	<div id="fixed-nav">
		<img src="images/small-logo_03.png" alt="small-logo_03.png" />
		<div id="nav-right">
			<div id="about-link">
				About
			</div>
			<div id="work-link">
				Work
			</div>
			<div id="contact-link">
				Contact
			</div>
		</div>
	</div>
</header>

<div id="wrapper">
	<article id="name">
		<p>
			Hello. My name is Chad. I am a Designer.
		</p>
	</article>
	<div id="triangle-down">

	</div>
	<article id="about">
		<h1>About</h1>
		<p>My name is Chad Ackerman and I am a fourth year design major at the University of Cincinnati in the Digital Design program. I have completed two professional co-op rotations with UniRush LLC/RushCard and one rotation with Gaslight Software LLC and am currently seeking a Spring co-op position.</p>

		<p>I am also involved on campus in the Sigma Chi Fraternity, the Greek Recruitment Team, and the DAAP Ambassador program. In addition to my collegiate activities I am also very interested in entrepreneurship and am involved in a couple start up companies. One of which is a freelance design business with one of my fellow studiomates. Feel free to look through my portfolio and enjoy!</p>
		<div id="social-icons" class="ss-icon">
		  <a href="#">twitter</a>
		  <a href="#">linkedin</a>
		  <a href="#">dribbble</a>
		  <a href="#">vimeo</a>
		  <a href="#">email</a>
		  <!-- <a href="#">link</a> -->
		</div>
	</article>
	<article id="work">
		<h1>Work</h1>
		<div id="tag-nav">
			<div>All</div>
			<div>Interactive</div>
			<div>Motion</div>
			<div>Branding</div>
		</div>
		<div class="project-thumb" onclick="loadProject('projectone')">
			<div class="project-thumb-description">
				<div>Maverick</div>
				<i>Recreation of the Title Sequence for the movie Maverick.</i>
			</div>
		</div>
		<div class="project-thumb" onclick="loadProject('projecttwo')">
			<div class="project-thumb-description">
				<div>Project 2</div>
				<i>This is a couple lines about this cool project that I did that involves this stuff.</i>
			</div>
		</div>
		<div class="project-thumb" onclick="loadProject('projectthree')">
			<div class="project-thumb-description">
				<div>Project 3</div>
				<i>This is a couple lines about this cool project that I did that involves this stuff.</i>
			</div>
		</div>
	</article>
	<article id="contact">

	</article>
	<div id="project-bg"></div>
	<div id="project-wrapper">
		<div id="project-container"></div>
		<div id="close">Close</div>
	</div>
</div>

<footer>

</footer>

	<script type="text/javascript" src="js/dynamic-loading.js"></script>

</body>
</html>