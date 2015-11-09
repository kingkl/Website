<?php $thisPage="Home Page"; ?>
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
			<h2>Welcome!</h2>
						
			<div class="topborder">&nbsp;</div>
			
			<div class="homefloatright">
				<p><img src="images/bird6-250x250-2.gif" alt="bird changing into the letter K"></p>
			</div>
			<div class="toppadding">
				<p>Hi, my name is Kandice King.  I am a second year student at Gwinnett Technical College.  I am currently in the Web Site Design/Development program and should finish my Associate of Applied Science degree in December.</p>
				<p>Below you will find links to pages containing my resume, Gwinnett Technical College coursework, and portfolio.</p>
				<p>If you would like to contact me regarding website design/development or image editing & repair I can be reached at:</p>
				<p>Phone: 770-617-2074<br>
				E-mail: <a href="mailto:kandiceking@bellsouth.net">kandiceking@bellsouth.net</a></p>
			</div>
			<div class="bottomRow"></div>
			<div class="topborder">&nbsp;</div>
			<div class="rowIndex fade">
				
				<div class="floatleftcol columnL">
					<a href="services.php">
						<img src="images/services.png" alt="services hyperlink">
						<span>Services</span>
					</a>
				</div>
				
				<div class="floatleftcol columnC">
					<a href="portfolio.php">
						<img src="images/portfolio.png" alt="portfolio hyperlink">
						<span>Portfolio</span>
					</a>
				</div>
				<div class="floatleftcol columnR">
					<a href="contact.php" target="_blank">
						<img src="images/contact.png" alt="contact hyperlink">
						<span>Contact Me</span>
					</a>
				</div>
			</div>
			
		</div>
		<div class="bottomRow"></div>
	</div>

</div>

<!--Footer Area - Secondary Navigation, copyright info-->
		<?php include("phpincludes/footer.php"); ?>
</body>
</html>