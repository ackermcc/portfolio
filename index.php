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
  <meta name="viewport" content="width=device-width, height=device-height">

  <title>Chad Ackerman | Digital Designer</title>

  <!-- style -->
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="symbolset/webfonts/ss-social-circle.css">

  <!-- js -->
  <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <script type="text/javascript" src="js/waypoints.min.js"></script>
  <script type="text/javascript" src="js/chack.js"></script>
  <script type="text/javascript" src="js/dynamic-loading.js"></script>
  <script type="text/javascript" src="js/jquery.dotdotdot-1.5.7-packed.js"></script>
  <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
  <script type="text/javascript" src="symbolset/webfonts/ss-social.js"></script>

  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31092072-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

	<script type="text/javascript" src="//use.typekit.net/qtj5tow.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body>

<header>
	<img id="logo" src="images/chad-ackerman-logo.png" alt="Chad Ackerman Logo" />
	<div id="name">Chad Ackerman</div>
	<div id="fixed-nav">
		<img src="images/small-logo_03.png" alt="small-logo_03.png" />
		<div id="nav-right">
			<div id="work-link">
				Work
			</div>
			<div id="about-link">
				About
			</div>
			<div id="contact-link">
				Contact
			</div>
		</div>
	</div>
</header>

<div id="wrapper">
	<article id="work">
		<!-- <h1>Work</h1> -->
		<div id="tag-nav">
			<div class="all-sort active-sort">All</div>
			<div class="interactive-sort">Interactive</div>
			<div class="motion-sort">Motion</div>
			<div class="branding-sort">Branding</div>
		</div>
		<div class="project-thumb interactive" onclick="loadProject('sfc')">
			<img src="images/title-images/sfc-title.jpg" alt="Summerfair Cincinnati Survey">
			<div class="project-thumb-description">
				<div>Summerfair Cincinnati Survey App</div>
				<i>Survey application built for in-event surveying of customers for user data.</i>
			</div>
		</div>
		<div class="project-thumb interactive motion branding" onclick="loadProject('nom')">
			<img src="images/title-images/nom-title.png" alt="nom">
			<div class="project-thumb-description">
				<div>nom</div>
				<i>Survey application built for in-event surveying of customers for user data.</i>
			</div>
		</div>
		<div class="project-thumb interactive branding" onclick="loadProject('nitelife')">
			<img src="images/title-images/nitelife-title.jpg" alt="NiteLife - Cincinnati Start Up">
			<div class="project-thumb-description">
				<div>NiteLife</div>
				<i>Logo, branding, marketing, product design, etc. for my start up company NiteLife.</i>
			</div>
		</div>
		<div class="project-thumb interactive" onclick="loadProject('baseball')">
			<img src="images/title-images/baseball-title.jpg" alt="Baseball Data Visualizer">
			<div class="project-thumb-description">
				<div>Baseball Visualizer</div>
				<i>Baseball data visualizer for offensive players' statistics.</i>
			</div>
		</div>
		<div class="project-thumb interactive" onclick="loadProject('sustainability')">
			<img src="images/title-images/ucs.jpg" alt="University of Cincinnati Sustainability - iPad App">
			<div class="project-thumb-description">
				<div>UC Sustainability</div>
				<i>iPad application for increasing awareness on sustainability at the University of Cincinnati.</i>
			</div>
		</div>
		<div class="project-thumb interactive branding" onclick="loadProject('gg')">
			<img src="images/title-images/gg-title.jpg" alt="Greatest Good - Splash Page">
			<div class="project-thumb-description">
				<div>Greatest Good</div>
				<i>Splash page for a non-profit start up that is launching early 2014.</i>
			</div>
		</div>
		<div class="project-thumb motion" onclick="loadProject('ssTutorial')">
			<img src="images/title-images/ss-tutorials.jpg" alt="Shutterstock Motion Tutorials">
			<div class="project-thumb-description">
				<div>Shutterstock Tutorials</div>
				<i>Tutorials created with Shutterstock content for its blog and content marketing.</i>
			</div>
		</div>
		<div class="project-thumb motion" onclick="loadProject('ssSpectrum')">
			<img src="images/title-images/ss-spectrum.jpg" alt="Shutterstock Spectrum Product Launch Video">
			<div class="project-thumb-description">
				<div>Shutterstock Spectrum</div>
				<i>Product release and demonstration video for Shutterstock's new visual search tool: Spectrum.</i>
			</div>
		</div>
		<div class="project-thumb motion" onclick="loadProject('maverick')">
			<img src="images/title-images/maverick.jpg" alt="Maverick Title Sequence">
			<div class="project-thumb-description">
				<div>Maverick</div>
				<i>Recreation of the Title Sequence for the movie Maverick.</i>
			</div>
		</div>
		<div class="project-thumb motion" onclick="loadProject('angryBirds')">
			<img src="images/title-images/angry-birds.jpg" alt="Angry Birds - Stop Motion">
			<div class="project-thumb-description">
				<div>Angry Birds</div>
				<i>Recreation of the digital game Angry Birds in stop motion animation.</i>
			</div>
		</div>
		<div class="project-thumb motion" onclick="loadProject('stepBrothers')">
			<img src="images/title-images/step-brothers.jpg" alt="Step Brothers Kinetic Type">
			<div class="project-thumb-description">
				<div>Step Brothers</div>
				<i>Kinetic type motion piece on a short scene from the movie Step Brothers.</i>
			</div>
		</div>
		<!-- <div class="project-thumb branding" onclick="loadProject('jotts')">
			<img src="images/title-images/jotts.jpg" alt="Jotts Branding">
			<div class="project-thumb-description">
				<div>Jotts</div>
				<i>Logo and brand identity for a small product start up company out of Columbus.</i>
			</div>
		</div> -->
	</article>

	<article id="about">
		<!-- <div class="section-title">About</div> -->
		<div>
			<img src="images/prof-image-circle.png" alt="Chad Ackerman" />

			<p>Nearly 2 years of professional experience in Digital Design,<br> with a focus in UI / UX Design. I have been involved in the very initial steps of products<br> and marketing campaigns, all the way to their production and launch.</p>

			<p>I am a University of Cincinnati Digital Design student with professional and<br> independent contracting experience over the last 3 years. I am graduating in April 2014<br> and in search of a full-time or long-term contract position in the field of UI / UX Design.</p>

			<a target="_blank" id="resume" href="resume.pdf">Résumé</a>
		</div>
	</article>

	
	<div id="project-wrapper">
		<div id="project-container"></div>
		<div id="close">Close</div>
	</div>
</div>

<footer>
	<article id="contact">
		<!-- <div class="section-title">Contact</div> -->
		<div id="social-icons" class="ss-icon">
		  <a target="_blank" href="https://twitter.com/chackerman">twitter</a>
		  <a target="_blank" href="http://www.linkedin.com/pub/chad-ackerman/36/352/885">linkedin</a>
		  <a target="_blank" href="http://dribbble.com/Chackerman">dribbble</a>
		  <a target="_blank" href="https://vimeo.com/chackerman">vimeo</a>
		  <!-- <a href="#">email</a> -->
		  <!-- <a href="#">link</a> -->
		</div>

	  <div id='email-form' style='width: 400px; margin: auto;'>
		  <form method='post' action='mailform.php'>
		  <input name='email' type='text' placeholder='Email'><br>
		  <input name='subject' type='text' placeholder='Subject'><br>
		  <br>
		  <textarea name='message' rows='12'></textarea><br>
		  <input id='submit' type='submit' name='Submit' value='Submit'>
		  </form>
	  </div>

	</article>
</footer>

	<script type="text/javascript" src="js/dynamic-loading.js"></script>

</body>
</html>