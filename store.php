<html>
	<head>
		<title>Store</title>
	</head>
	<body style="background-color:black;  color: #ffffff;">
		<center>
	<body>
		<br><br><br>
		<H1>Thanks !</H1>
		<?php

			echo "Hello World!";

			$myfile = fopen("file.csv","a+") or die("Unable to open file!");
			$size = $_REQUEST['size'];
			$rating = $_REQUEST['rating'];
			$gender = $_REQUEST['gender'];

			$txt = $gender . ',' . $rating . ',' . $size . PHP_EOL;
			fwrite($myfile, $txt);
			
			fclose($myfile);
			
		?>
	</body>
</html>