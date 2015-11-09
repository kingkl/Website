<?php $thisPage="Site Map"; ?>
<?php $thisPageClass=""; ?>

<!--Head Area -->
<?php include("phpincludes/head.php"); ?>

<body>

<!-- Navigation -->
<?php include("phpincludes/navigation.php"); ?>

<div id="centerpage">	

	<!--Header Area - Site Title-->
	<?php include("phpincludes/header.php"); ?>



<!--right column - Main Content - Home page - Introduction to site-->	
	<div id="rightcolumn">

		<div class="content">
			<h2>Site Map</h2>
						
			<div class="topborder">&nbsp;</div>
			
			<div class="homefloatright">
				<p><img src="images/bird6-250x250-2.gif" alt="bird changing into the letter K"></p>
			</div>
			<div class="toppadding">
				<ul id="sitemap">
					<li><a href="index.php">Home</a></li>
					<li><a href="services.php">Services</a></li>
					<li><a href="resume.php">Resume</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="portfolio.php">Portfolio</a>
						<ul>
							<li><a href="portfolio.php#websites">WEBSITE DESIGN</a>
								<ul>
									<li><a href="portfolio/dentures2/index.html">Josiah Crowell's Denture Service</a></li>
									<li><a href="portfolio/manhole-bootstrap/index.html">Manholes Can Be Magic (Bootstrap)</a></li>
									<li><a href="portfolio/wagon2/index.html">Strandt & Tappen, Inc.</a></li>
								</ul>
							</li>
							<li><a href="portfolio.php#imgEdits">DIGITAL IMAGE EDITING & REPAIR</a>
								<ul class="dropdown3">
									<li><a href="img-edits.php">Digital Image Projects</a></li>
									<li><a href="repair.php">Repaired Photographs</a></li>
									<li><a href="animated.php">Animated GIFs</a></li>	
								</ul>
							</li>
							<li><a href="portfolio.php#CSS-JS">CSS & JAVASCRIPT EXAMPLES</a>
								<ul>
									<li><a href="css-shapes.php">CSS Shapes & Animations</a></li>
									<li><a href="canvas.php">HTML5 Canvas Examples</a></li>
								</ul>
							</li>
							<li><a href="coursework.php">Coursework</a></li>
						</ul>
					</li>
				</ul><!--end site map-->
			</div>
		</div>
		<div class="bottomRow"></div>
	</div>

</div>

<!--Footer Area - Secondary Navigation, copyright info-->
		<?php include("phpincludes/footer.php"); ?>
</body>
</html>