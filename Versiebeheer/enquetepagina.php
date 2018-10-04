<html>

	<head>
		<div class="head">
		<title>Ontbijtje Mac</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		</div>
	</head>

<body class="body">
<header class="logo">
</header> 
	
				<a href="Ontbijtje mac.php"> Home</a>
				<topsection class="topsection">
					<form class="ENQUETE" action="" method="post">

					Naam:<br/>
					<input type="text" name="naam"><br/>
					E-mail:<br/>
					<input type="text" name="e-mail"><br/><br/>


					Wat vind je van het ontbijtje?<br/>
					<input type="radio" name="vraag1" value="slecht">Slecht<br>
					<input type="radio" name="vraag1" value="matig">Matig<br>
					<input type="radio" name="vraag1" value="redelijk">Redelijk<br>
					<input type="radio" name="vraag1" value="goed">Goed<br>
					<input type="radio" name="vraag1" value="uitstekend">Uitstekend<br><br>

					Wat vind je van de prijs van het ontbijtje?<br/>
					<input type="radio" name="vraag2" value="slecht">Slecht<br>
					<input type="radio" name="vraag2" value="matig">Matig<br>
					<input type="radio" name="vraag2" value="redelijk">Redelijk<br>
					<input type="radio" name="vraag2" value="goed">Goed<br>
					<input type="radio" name="vraag2" value="uitstekend">Uitstekend<br><br>

					Wat vind je van de klantvriendelijkheid?<br/>
					<input type="radio" name="vraag3" value="slecht">Slecht<br>
					<input type="radio" name="vraag3" value="matig">Matig<br>
					<input type="radio" name="vraag3" value="redelijk">Redelijk<br>
					<input type="radio" name="vraag3" value="goed">Goed<br>
					<input type="radio" name="vraag3" value="uitstekend">Uitstekend<br><br>

					Hoe smaakt de muffin?<br/>
					<input type="radio" name="vraag4" value="slecht">Slecht<br>
					<input type="radio" name="vraag4" value="matig">Matig<br>
					<input type="radio" name="vraag4" value="redelijk">Redelijk<br>
					<input type="radio" name="vraag4" value="goed">Goed<br>
					<input type="radio" name="vraag4" value="uitstekend">Uitstekend<br><br>

					<tr>
					<td><textarea name="bericht" rows="5" cols="40" placeholder="Opmerkingen en/of tips."></textarea></td>
					</tr>
					<tr>
					<td>&nbsp;</td>
					<td><input name="VERZENDEN" type="submit" value="Verzenden" /></td>
					</tr>
					</form>
					
				<?php
				error_reporting(0);
				$file = ("enquete.txt");
				$myfile = fopen("enquete.txt", "a+") or die("Unable to open file!");
				$txt = "\r\nNaam: ".$_POST["naam"];
				fwrite($myfile, $txt);
				$txt = "\r\nEmail: ".$_POST["e-mail"];
				fwrite($myfile, $txt);				
				$txt = "\r\nWat vind je van het ontbijtje? : ".$_POST["vraag1"];
				fwrite($myfile, $txt);
				$txt = "\r\nWat vind je van de prijs van het ontbijtje? : ".$_POST["vraag2"];
				fwrite($myfile, $txt);
				$txt = "\r\nWat vind je van de klantvriendelijkheid? : ".$_POST["vraag3"];
				fwrite($myfile, $txt);
				$txt = "\r\nHoe smaakt de muffin? : ".$_POST["vraag4"];
				fwrite($myfile, $txt);
				$txt = "\r\nOpmerkingen en tips. : ".$_POST["bericht"];
				fwrite($myfile, $txt);
				$txt = "\r\n----------------------------------------------------------------------------------------------------";
				fwrite($myfile, $txt);
				fclose($myfile);
				?>
				</topsection>

				<footsection class="footsection">

				</footsection>

					<footer class="footer">

					</footer>
				</div>
</body>
</html>
