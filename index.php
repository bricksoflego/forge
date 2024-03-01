<?php
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Forge - Home</title>
<link rel="stylesheet" href="Content/Scripts/site.css" />
<link rel="icon" type="image/x-icon" href="mLogo.ico" />
<link rel="preload" href="Content/Fonts/CCBiffBamBoomOutline.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="Content/Fonts/ClassicComic-Medium.woff2" as="font" type="font/woff2" crossorigin>
</head>
<body>
	<header><img src="Content/Images/mLogo.png" /></header>
	<main>
		<div id="divWelcome">
			<h2>Welcome to the</h2>
			<h1>Forge</h1>
		</div>
		<hr />
		<div class="divDate">
			<strong>Today is:</strong> 
			<? 
				$today = new DateTime();
				echo $today->format('F d, Y') 
			?>
		</div>
	</main>
</body>
</html>
