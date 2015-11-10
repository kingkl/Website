<?php $thisPage="Porfolio"; ?>
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
			
			<h2 id="websites">Portfolio</h2>
			
			<div class="topborder">&nbsp;</div>
			
			<div class="homefloatright">
				<p><img src="images/webdesign.png" alt="webdesign image">
						<span>Website Design</span></p>
			</div>
			
			<h3 class="toppaddingh3">WEBSITE DESIGN</h3>
			<dl>
				<dt><a href="portfolio/dentures2/index.html" target="_blank">Josiah Crowell's Denture Service</a></dt>
					<dd>This site was initially created as a project in my CIST1510 - Web Development I (HTML5/CSS3) class. It has been modified a little since then.</dd>
				<dt><a href="portfolio/manhole-bootstrap/index.html" target="_blank">Manholes Can Be Magic (Bootstrap)</a></dt>
					<dd>I created a new version of the final project from my CIST1510 - Web Development I (HTML5/CSS3) class.  I created this site using Bootstrap v3.3.2.</dd>
				<dt><a href="portfolio/wagon2/index.html" target="_blank">Strandt & Tappen, Inc.</a></dt>
					<dd>This is a Flash website that was created as the final project in my CIST1540 - Web Animation I (Adobe Flash) class. I have <a href="portfolio/wagon2/index2.html">recreated this site</a> using HTML5/CSS3 and Javascript.</dd>
			</dl>
			
			
			<div class="topborder" id="imgEdits">&nbsp;</div>
			
			<div class="homefloatright">
				<p><img src="images/repair.png" alt="repair image">
						<span class="one">Digital Image</span>
						<span class="two">Editing & Repair</span></p>
			</div>
			
			<h3 class="toppaddingh3">DIGITAL IMAGE EDITING & REPAIR</h3>
			<dl>
				<dt><a href="img-edits.php">Digital Image Projects</a></dt>
					<dd>These are some examples of posters created as class projects.</dd>
				<dt><a href="repair.php">Repaired Photographs</a></dt>
					<dd>Here you will find some examples of photographs that I have repaired.</dd>
				<dt><a href="animated.php">Animated GIFs</a></dt>
					<dd>These are some animated GIFs that I have created.</dd>
			</dl>
			
			
			<div class="topborder" id="CSS-JS">&nbsp;</div>
			
			<div class="homefloatright">
				<p><img src="images/css-js.png" alt="css and javascript image">
						<span class="one">CSS & JavaScript</span>
						<span class="two">Examples</span></p>
			</div>
			
			<h3 class="toppaddingh3">CSS & JAVASCRIPT EXAMPLES</h3>
			<dl>
				<dt><a href="css-shapes.php">CSS Shapes & Animations</a></dt>
					<dd>Here you will find some examples of shapes created using either CSS or HTML entities.  The shapes are then animated using CSS.</dd>
				<dt><a href="canvas.php">HTML5 Canvas Examples</a></dt>
					<dd>These are some examples of the HTML5 canvas element. The graphics in on the canvas element are displayed and animated using JavaScript.</dd>
			</dl>
			
			<div class="topborder">&nbsp;</div>
			
			<div class="homefloatright">
				<p><img src="images/school.png" alt="coursework image">
						<span>Coursework</span></p>
			</div>
			
			<h3 class="toppaddingh3">COURSEWORK</h3>
			<dl>
				<dt><a href="coursework.php">Gwinnett Technical College Coursework</a></dt>
					<dd>Here you will find web pages and other assignments that I have completed for courses taken at Gwinnett Technical College.</dd>
			</dl>
			
		</div>
		<div class="bottomRow"></div>
	</div>



</div>

<!--Footer Area - Secondary Navigation, copyright info-->
		<?php include("phpincludes/footer.php"); ?>
</body>
</html>