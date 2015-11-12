<div id="navbackground"></div>
	<div id="wrapper"> 
		<div id="icon">
			<a href="index.php"><img src="images/bird6-icon.gif" alt="Kandice King's icon"></a>
		</div>
		<ul id="mobileNav">
			<li><button type="button" class="menuBtn">Menu&nbsp;
					<span class="cssBtn">
						<span class="cssBtnLine">&nbsp;</span>
						<span class="cssBtnLine">&nbsp;</span>
						<span class="cssBtnLine">&nbsp;</span>
					</span>
				</button>
				<ul id="nav">
					<li class="bottomddb2"<?php if ($thisPage=="Home Page") echo " id=\"currentpage\""; ?>><a href="index.php">Home</a></li>
					<li class="bottomddb2"<?php if ($thisPage=="Services") echo " id=\"currentpage\""; ?>><a href="services.php">Services</a></li>
					<!--<li class="bottomddb2"><a href="KandiceKingResume.pdf" target="_blank">Resume</a></li>-->
					<li class="bottomddb2"<?php if ($thisPage=="Contact Me") echo " id=\"currentpage\""; ?>><a href="contact.php">Contact</a></li>
					<li <?php if ($thisPage=="Porfolio") echo " id=\"currentpage\""; ?>><a href="#">Portfolio <small>&#x25BC;</small></a>
						<ul class="dropdown">
							<li class="bottomddb3 ddtitle"><a href="#">WEBSITE DESIGN<br><span class="arrowLeft"> &#x25C4; </span><small class="arrowDownL"> &#x25BC; </small><small class="arrowDown"> &#x25BC; </small><span class="arrowRight"> &#x25BA; </span></a>
								<ul class="dropdown2">
									<li class="bottomddb ddinnershadowtop"><a href="portfolio/dentures2/index.html" target="_blank">Josiah Crowell's Denture Service</a></li>
									<li class="bottomddb ddinnershadow"><a href="portfolio/manhole-bootstrap/index.html" target="_blank">Manholes Can Be Magic (Bootstrap)</a></li>
									<li class="ddoutershadow ddinnershadow"><a href="portfolio/wagon2/index.html" target="_blank">Strandt & Tappen, Inc.</a></li>
								</ul><!--End class dropdown2-->
							</li>
							<li class="topddb ddtitle"><a href="#">DIGITAL IMAGE<br><span class="arrowLeft"> &#x25C4; </span><small class="arrowDownL"> &#x25BC; </small>EDITING & REPAIR <small class="arrowDown"> &#x25BC; </small><span class="arrowRight"> &#x25BA; </span></a>
								<ul class="dropdown3">
									<li <?php if ($thisPageClass=="Digital Image Projects") {echo "class=\"bottomddb topddb ddinnershadow currentpage\"";} else {echo "class=\"bottomddb topddb ddinnershadow\"";} ?>><a href="img-edits.php">Digital Image Projects</a></li>
									<li <?php if ($thisPageClass=="Repaired Photographs") {echo "class=\"bottomddb ddinnershadow currentpage\"";} else {echo "class=\"bottomddb ddinnershadow\"";} ?>><a href="repair.php">Repaired Photographs</a></li>
									<li <?php if ($thisPageClass=="Animated GIFs") {echo "class=\"ddoutershadow ddinnershadow currentpage\"";} else {echo "class=\"ddoutershadow ddinnershadow\"";} ?>><a href="animated.php">Animated GIFs</a></li>	
								</ul><!--End class dropdown3-->
							</li>
							<li class="topddb ddtitle"><a href="#">CSS & JAVASCRIPT<br><span class="arrowLeft"> &#x25C4; </span><small class="arrowDownL"> &#x25BC; </small>EXAMPLES<small class="arrowDown"> &#x25BC; </small><span class="arrowRight"> &#x25BA; </span></a>
								<ul class="dropdown4">
									<li <?php if ($thisPageClass=="CSS Shapes & Animations") {echo "class=\"bottomddb topddb ddinnershadow currentpage\"";} else {echo "class=\"bottomddb topddb ddinnershadow\"";} ?>><a href="css-shapes.php">CSS Shapes & Animations</a></li>
									<li <?php if ($thisPageClass=="HTML5 Canvas Examples") {echo "class=\"ddoutershadow ddinnershadow currentpage\"";} else {echo "class=\"ddoutershadow ddinnershadow\"";} ?>><a href="canvas.php">HTML5 Canvas Examples</a></li>
								</ul><!--End class dropdown4-->
							</li>
							<li <?php if ($thisPageClass=="Coursework") {echo "class=\"currentpage topddb ddtitle\"";} else {echo "  class=\"topddb ddtitle\"";} ?>><a href="coursework.php">COURSEWORK</a></li>
						</ul><!--End class dropdown - dropdown-->
					</li>
				</ul><!--End id nav - menu on bar-->
			</li>
		</ul><!--End id mobileNav - phone button-->
	</div><!--End Wrapper-->