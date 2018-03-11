<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
				<?php 
        		if(empty($_POST["name"]) || empty($_POST["select"]) || empty($_POST["creditCard"]) ||empty($_POST["visa"]))
				{
					echo "<h1>Sorry</h1><br>";
					echo "You didn't fill out the form completely.";	
				ECHO "<a href=buyagrade.html target=_self>Try again?</a>";
				}
				?>
				<?php
				if(empty($_POST["name"]) || empty($_POST["select"]) || empty($_POST["creditCard"]) ||empty($_POST["visa"]))
				{
				exit();	
				}
				?>	
		<h1>Thanks, sucker!</h1>
		<p>Your information has been recorded.</p>
		<?php ?>
		<dl>
			<dt>Name</dt>
			<dd>
				<?php 
				echo $_POST["name"];
				$myfile = fopen("people_info.txt", "a") or die("Unable to write the file!");
				$txt = $_POST["name"].",";
				fwrite($myfile, $txt);
				fclose($myfile);
				?>
			</dd>

			<dt>Section</dt>
			<dd>
				<?php 
				 echo $_POST["select"];
				$myfile = fopen("people_info.txt", "a") or die("Unable to write the file");
				$txt = $_POST["select"].",";
				fwrite($myfile, $txt);
				fclose($myfile);
				?>
			</dd>

			<dt>Credit Card</dt>
			<dd>
				<?php 
				 echo $_POST["creditCard"]."(".$_POST["visa"].")";
				$myfile = fopen("people_info.txt", "a") or die("Unable to write the file");
				$txt = $_POST["creditCard"].",".$_POST["visa"]."\n";
				fwrite($myfile, $txt);
				fclose($myfile);
				?>
			</dd>
		</dl>
		<?php 
			echo "Here are all the suckers who have submitted here:<br><br> ";
			$myfile_1 = fopen("people_info.txt","r") or die("Unable to open the file");
			while (!feof($myfile_1)) {
		 		echo fgets($myfile_1)."<br>";
			}
			fclose($myfile_1);
		?>
	</body>
</html>  