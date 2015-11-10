<?php $thisPage="Porfolio"; ?>
<?php $thisPageClass="HTML5 Canvas Examples"; ?>


<?php include("phpincludes/head.php"); ?>

<body>

<!-- Navigation -->
<?php include("phpincludes/navigation.php"); ?>

<div id="centerpage">	

	<!--Header Area - Site Title-->
	<?php include("phpincludes/header.php"); ?>


<!--right column - Main Content - Animated Gifs-->	
	<div id="rightcolumn">
		<div class="mobile text-center">
						
			<h2>HTML5 Canvas Examples</h2>
			
			<div class="topborder">&nbsp;</div>
				<div>These are some examples of the HTML5 canvas element. The graphics in on the canvas element are displayed and animated using JavaScript.</div>

				<div class="topborder">&nbsp;</div>
					
						<canvas id="canvas1"></canvas><br>
						<input id="animate1" type="button" value="Animate" onClick="Animate1(-255,316)">
						
				<div class="topborder">&nbsp;</div>
					
						<canvas id="canvas2">A canvas element should appear here, in browsers that support it</canvas><br>
						<input id="animate2" type="button" value="Animate" onClick="Animate2(255,0,255)">
						
				<div class="topborder">&nbsp;</div>
					
						<canvas id="canvas3">A canvas element should appear here, in browsers that support it</canvas><br>
						<input id="animate3" type="button" value="Animate" onClick="Animate3()">
					
			
		</div>
			
				<br>
	</div>




</div>

<!--Footer Area - Secondary Navigation, copyright info-->
		<?php include("phpincludes/footer.php"); ?>
</body>
</html>