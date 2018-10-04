<html>

	<head>
		<div class="head">
		<title>uTablet</title>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<link rel="shortcut icon" href="icon/uTablet.ico">
		</div>
	</head>

<body class="body">
<header class="logo">
</header> 
			<nav class="nav">
				<ul>
					<li><a id="home"href="index.html">Home</a></li>
					<li><a id="producten" href="producten.html">Producten</a>
							<ul id=productenlijst>
								<li><a id="samsung" href="samsung.html">Samsung</a></li>
								<li><a id="apple" href="apple.html">Apple</a></li>
								<li><a id="lenovo" href="lenovo.html">Lenovo</a></li>
							</ul>
					</li>
					<li><a id="contact" href="contact.html">Contact</a></li>
				</ul>
			</nav>


			<div class="menu">
				<ul>
					<li><p id="Menu"> Menu </p></li>
					<li><a id="populair"href="populair.html">Populaire producten</a></li>
					<li><a id="nieuw" href="nieuw.html">Nieuwe producten</a></li>
					<li><a id="kortingen" href="kortingen.html">Kortingen</a></li>
					<li><a id="enquete" href="enquetepagina.html">Enquete invullen</a></li>
					<li><a id="inlog" href="inlogpagina.html">Log in</a></li>
					<li><a id="regist" href="registratiepagina.html"> Registreer</a></li>
				</ul>
			</div>

				<topsection class="topsection">
					<form class="ENQUETE" action="" method="post">

					Naam:<br/>
					<input type="text" name="naam"><br/>
					E-mail:<br/>
					<input type="text" name="e-mail"><br/><br/>


					Ik vertrouw erop dat de  website mijn privacygegevens niet misbruikt.<br/>
					<input type="radio" name="vraag1" value="slecht">Slecht<br>
					<input type="radio" name="vraag1" value="matig">Matig<br>
					<input type="radio" name="vraag1" value="redelijk">Redelijk<br>
					<input type="radio" name="vraag1" value="goed">Goed<br>
					<input type="radio" name="vraag1" value="uitstekend">Uitstekend<br><br>

					Op de website kan ik snel informatie vinden.<br/>
					<input type="radio" name="vraag2" value="slecht">Slecht<br>
					<input type="radio" name="vraag2" value="matig">Matig<br>
					<input type="radio" name="vraag2" value="redelijk">Redelijk<br>
					<input type="radio" name="vraag2" value="goed">Goed<br>
					<input type="radio" name="vraag2" value="uitstekend">Uitstekend<br><br>

					De functioneert altijd naar behoren.<br/>
					<input type="radio" name="vraag3" value="slecht">Slecht<br>
					<input type="radio" name="vraag3" value="matig">Matig<br>
					<input type="radio" name="vraag3" value="redelijk">Redelijk<br>
					<input type="radio" name="vraag3" value="goed">Goed<br>
					<input type="radio" name="vraag3" value="uitstekend">Uitstekend<br><br>

					Op de site van kan ik snel vinden wat ik zoek.<br/>
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
				$file = ("enquete.txt");
				$myfile = fopen("enquete.txt", "a+") or die("Unable to open file!");
				$txt = "\r\nNaam: ".$_POST["naam"];
				fwrite($myfile, $txt);
				$txt = "\r\nEmail: ".$_POST["e-mail"];
				fwrite($myfile, $txt);				
				$txt = "\r\nIk vertrouw erop dat de  website mijn privacygegevens niet misbruikt. : ".$_POST["vraag1"];
				fwrite($myfile, $txt);
				$txt = "\r\nOp de website kan ik snel informatie vinden. : ".$_POST["vraag2"];
				fwrite($myfile, $txt);
				$txt = "\r\nDe functioneert altijd naar behoren. : ".$_POST["vraag3"];
				fwrite($myfile, $txt);
				$txt = "\r\nOp de site van kan ik snel vinden wat ik zoek. : ".$_POST["vraag4"];
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
