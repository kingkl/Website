<?php $thisPage="Site Map"; ?>
<?php $thisPageClass=""; ?>


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
			
			<div class="toppaddingh3">
				<ul id="sitemap">
					<li class="thumbnailIcon"><a href="index.php"><img  src="images/thumbnails/bird6-thumb.gif" alt="home hyperlink"></a><div class="thumbnailIconText"><a href="index.php">Home</a></div></li>
					<li class="thumbnailIcon"><a href="services.php"><img  src="images/thumbnails/services-small.png" alt="services hyperlink"></a><div class="thumbnailIconText"><a href="services.php">Services</a></div></li>
					<!--<li><a href="resume.php">Resume</a></li>-->
					<li class="thumbnailIcon"><a href="contact.php"><img  src="images/thumbnails/contact-small.png" alt="contact hyperlink"></a><div class="thumbnailIconText"><a href="contact.php">Contact</a></div></li>
					<li class="thumbnailIcon"><a href="portfolio.php"><img  src="images/thumbnails/portfolio-small.png" alt="portfolio hyperlink"></a><div class="thumbnailIconText"><a href="portfolio.php">Portfolio</a></div>
						<ul>
							<li class="thumbnailIcon"><a href="portfolio.php#websites.php"><img  src="images/thumbnails/webdesign-small.png" alt="website design hyperlink"></a><div class="thumbnailIconText"><a href="portfolio.php#websites">WEBSITE DESIGN</a></div>
								<ul>
									<li class="crystalcir-noshad"><a href="portfolio/dentures2/index.html" target="_blank"><img  src="images/crystalcir-noshad.png" alt="Josiah Crowell's Denture Service hyperlink"></a><div class="thumbnailIconText"><a href="portfolio/dentures2/index.html" target="_blank">Josiah Crowell's Denture Service</a></div></li>
									<li class="crystalcir-noshad"><a href="portfolio/manhole-bootstrap/index.html" target="_blank"><img  src="images/crystalcir-noshad.png" alt="Manholes Can Be Magic hyperlink"></a><div class="thumbnailIconText"><a href="portfolio/manhole-bootstrap/index.html" target="_blank">Manholes Can Be Magic (Bootstrap)</a></div></li>
									<li class="crystalcir-noshad"><a href="portfolio/wagon2/index.html" target="_blank"><img  src="images/crystalcir-noshad.png" alt="Strandt & Tappen, Inc. hyperlink"></a><div class="thumbnailIconText"><a href="portfolio/wagon2/index.html" target="_blank">Strandt & Tappen, Inc.</a></div></li>
								</ul>
							</li>
							<li class="thumbnailIcon"><a href="portfolio.php#imgEdits"><img  src="images/thumbnails/repair-small.png" alt="digital image editiing & repair hyperlink"></a><div class="thumbnailIconText"><a href="portfolio.php#imgEdits">DIGITAL IMAGE EDITING & REPAIR</a></div>
								<ul class="dropdown3">
									<li class="crystalcir-noshad"><a href="img-edits.php"><img  src="images/crystalcir-noshad.png" alt="Digital Image Projects hyperlink"></a><div class="thumbnailIconText"><a href="img-edits.php">Digital Image Projects</a></div></li>
									<li class="crystalcir-noshad"><a href="repair.php"><img  src="images/crystalcir-noshad.png" alt="Repaired Photographs hyperlink"></a><div class="thumbnailIconText"><a href="repair.php">Repaired Photographs</a></div></li>
									<li class="crystalcir-noshad"><a href="animated.php"><img  src="images/crystalcir-noshad.png" alt="Animated GIFs hyperlink"></a><div class="thumbnailIconText"><a href="animated.php">Animated GIFs</a></div></li>	
								</ul>
							</li>
							<li class="thumbnailIcon"><a href="portfolio.php#CSS-JS"><img  src="images/thumbnails/css-js-small.png" alt="css & javascript examples hyperlink"></a><div class="thumbnailIconText"><a href="portfolio.php#CSS-JS">CSS & JAVASCRIPT EXAMPLES</a></div>
								<ul>
									<li class="crystalcir-noshad"><a href="css-shapes.php"><img  src="images/crystalcir-noshad.png" alt="CSS Shapes & Animations hyperlink"></a><div class="thumbnailIconText"><a href="css-shapes.php">CSS Shapes & Animations</a></div></li>
									<li class="crystalcir-noshad"><a href="canvas.php"><img  src="images/crystalcir-noshad.png" alt="HTML5 Canvas Examples hyperlink"></a><div class="thumbnailIconText"><a href="canvas.php">HTML5 Canvas Examples</a></div></li>
								</ul>
							</li>
							<li class="thumbnailIcon"><a href="coursework.php"><img  src="images/thumbnails/school-small.png" alt="coursework hyperlink"></a><div class="thumbnailIconText"><a href="coursework.php">Coursework</a></div></li>
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