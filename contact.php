<?php $thisPage="Contact Me"; ?>
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
			<h2>Contact Me</h2>
						
			<div class="topborder">&nbsp;</div>
			
			<div class="homefloatright">
				<p><img src="images/contact.png" alt="contact me image">
						<span>Contact Me</span></p>
			</div>
			<div class="toppadding">
				<p>I can be reached using the form below.</p>
				
				<?php
			function validateInput($data, $fieldName) {
				global $errorCount;
				if(empty($data)) {
					echo "\"$fieldName\" is a required field.<br />\n";
					++$errorCount;
					$retval = "";
				} else {
					//Only clean up the input if it isn't empty
					$retval = trim($data);
					$retval = stripslashes($retval);
				}
				return($retval);
			}
			function validateEmail($data, $fieldName) {
				global $errorCount;
				if(empty($data)) {
					echo "\"$fieldName\" is a required field.<br />\n";
					++$errorCount;
					$retval = "";
				} else {
					//Only clean up the input if it isn't empty
					$retval = trim($data);
					$retval = stripslashes($retval);
					$pattern = "/^[\w-]+(\.[\w-]+)*@" . "[\w-]+(\.[\w-]+)*" . "(\.[a-z]{2,})$/i";
					if (preg_match($pattern, $retval)==0) {
						echo "\"$fieldName\" is not a valid e-mail address.<br />\n";
						++$errorCount;
					}
				}
				return($retval);
			}
			function displayForm($Sender, $Email, $Subject, $Message) {
				?>
				<form name="contact" action="ContactForm.php" method="post">
					<p><label for="Sender">Your Name: </label><input type="text" name="Sender" value="<?php echo $Sender; ?>"></p>
					<p><label for="Email">Your E-mail: </label><input type="text" name="Email" value="<?php echo $Email; ?>"></p>
					<p><label for="subject">Subject: </label><input type="text" name="Subject" value="<?php echo $Subject; ?>"></p>
					<p><label for="Message">Message: </label>
					<textarea name="Message"><?php echo $Message; ?></textarea></p>
					<p><label>&nbsp;</label><input type="reset" value="Clear Form">&nbsp;&nbsp;
					<input type="submit" name="Submit" value="Send Form" /></p>
				</form>
				<p>You can also give me call at: 770-617-2074</p>
				<?php
			}
			$ShowForm = TRUE;
			$errorCount = 0;
			$Sender = "";
			$Email = "";
			$Subject = "";
			$Message = "";
			if (isset($_POST['Submit'])) {
				$Sender = validateInput($_POST['Sender'], "Your Name");
				$Email = validateEmail($_POST['Email'], "Your E-mail");
				$Subject = validateInput($_POST['Subject'], "Subject");
				$Message = validateInput($_POST['Message'], "Message");
				if ($errorCount==0)
					$ShowForm = FALSE;
				else
					$ShowForm = TRUE;
			}
			if ($ShowForm == TRUE) {
				if ($errorCount>0) //if there were errors 
					echo "<p>Please re-enter the form information below.</p>\n";
				displayForm($Sender, $Email, $Subject, $Message);
			} else {
				$SenderAddress = "$Sender <$Email>";
				$Headers = "From: $SenderAddress\nCC:$SenderAddress\n";
				//Substitute your own email address
				$result = mail("kandicel@kking.info", $Subject, $Message, $Headers);
				if ($result)
					echo "<p>Your message has been sent. Thank you, " . $Sender . ".</p>\n";
				else 
					echo "<p>There was an error sending your message, " . $Sender . ".</p>\n";
					
			}
		?>
				
			</div>
		</div>
		<div class="bottomRow">&nbsp;</div>
	</div>

</div>

<!--Footer Area - Secondary Navigation, copyright info-->
		<?php include("phpincludes/footer.php"); ?>
</body>
</html>