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
				<p><img src="images/sitemap.png" alt="site map image"><span>Site Map</span></p>
			</div>
			
			<div class="toppaddingh3">
				<ul id="sitemap">
					<li class="thumbnailIcon"><a href="index.php"><img src="images/thumbnails/bird6-thumb.gif" alt="home hyperlink"><span class="thumbnailIconText display-block">Home</span></a></li>
					<li class="thumbnailIcon"><a href="services.php"><img src="images/thumbnails/services-small.png" alt="services hyperlink"><span class="thumbnailIconText display-block">Services</span></a></li>
					<!--<li><a href="resume.php">Resume</a></li>-->
					<li class="thumbnailIcon"><a href="contact.php"><img src="images/thumbnails/contact-small.png" alt="contact hyperlink"><span class="thumbnailIconText display-block">Contact</span></a></li>
					<li class="thumbnailIcon"><a href="portfolio.php"><img src="images/thumbnails/portfolio-small.png" alt="portfolio hyperlink"><span class="thumbnailIconText display-block">Portfolio</span></a>
						<ul>
							<li class="thumbnailIcon"><a href="portfolio.php#websites.php"><img src="images/thumbnails/webdesign-small.png" alt="website design hyperlink"><span class="thumbnailIconText display-block">WEBSITE DESIGN</span></a>
								<ul>
									<li class="crystalcir-noshad"><a href="portfolio/dentures2/index.html" target="_blank"><img src="images/crystalcir-noshad.png" alt="Josiah Crowell's Denture Service hyperlink"><span class="thumbnailIconText display-blocksm">Josiah Crowell's Denture Service</span></a></li>
									<li class="crystalcir-noshad"><a href="portfolio/manhole-bootstrap/index.html" target="_blank"><img src="images/crystalcir-noshad.png" alt="Manholes Can Be Magic hyperlink"><span class="thumbnailIconText display-blocksm">Manholes Can Be Magic (Bootstrap)</span></a></li>
									<li class="crystalcir-noshad"><a href="portfolio/wagon2/index.html" target="_blank"><img src="images/crystalcir-noshad.png" alt="Strandt & Tappen, Inc. hyperlink"><span class="thumbnailIconText display-blocksm">Strandt & Tappen, Inc.</span></a></li>
								</ul>
							</li>
							<li class="thumbnailIcon"><a href="portfolio.php#imgEdits"><img src="images/thumbnails/repair-small.png" alt="digital image editiing & repair hyperlink"><span class="thumbnailIconText display-block">DIGITAL IMAGE EDITING & REPAIR</span></a>
								<ul class="dropdown3">
									<li class="crystalcir-noshad"><a href="img-edits.php"><img src="images/crystalcir-noshad.png" alt="Digital Image Projects hyperlink"><span class="thumbnailIconText display-blocksm">Digital Image Projects</span></a></li>
									<li class="crystalcir-noshad"><a href="repair.php"><img src="images/crystalcir-noshad.png" alt="Repaired Photographs hyperlink"><span class="thumbnailIconText display-blocksm">Repaired Photographs</span></a></li>
									<li class="crystalcir-noshad"><a href="animated.php"><img src="images/crystalcir-noshad.png" alt="Animated GIFs hyperlink"><span class="thumbnailIconText display-blocksm">Animated GIFs</span></a></li>	
								</ul>
							</li>
							<li class="thumbnailIcon"><a href="portfolio.php#CSS-JS"><img src="images/thumbnails/css-js-small.png" alt="css & javascript examples hyperlink"><span class="thumbnailIconText display-block">CSS & JAVASCRIPT EXAMPLES</span></a>
								<ul>
									<li class="crystalcir-noshad"><a href="css-shapes.php"><img src="images/crystalcir-noshad.png" alt="CSS Shapes & Animations hyperlink"><span class="thumbnailIconText display-blocksm">CSS Shapes & Animations</span></a></li>
									<li class="crystalcir-noshad"><a href="canvas.php"><img src="images/crystalcir-noshad.png" alt="HTML5 Canvas Examples hyperlink"><span class="thumbnailIconText display-blocksm">HTML5 Canvas Examples</span></a></li>
								</ul>
							</li>
							<li class="thumbnailIcon"><a href="coursework.php"><img src="images/thumbnails/school-small.png" alt="coursework hyperlink"><span class="thumbnailIconText display-block">Coursework</span></a></li>
						</ul>
					</li>
				</ul><!--end site map-->
			</div>
		</div>
		<div class="bottomRow">&nbsp;</div>
	</div>

</div>

<!--Footer Area - Secondary Navigation, copyright info-->
		<?php include("phpincludes/footer.php"); ?>
</body>
</html>