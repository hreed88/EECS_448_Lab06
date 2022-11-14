<?php
    	echo "<html>
		<head>
		<link rel='stylesheet' href='style.css'>
		<title>
		result
		</title>
		</head>
		<body style='background-color: lightgrey'>
		<h1><a href=index.html>Home</a></h1>
		<table style='border-style: dotted';>
		";
		for($rows = 1; $rows <= 100; $rows++){
			echo "<tr>";
			for($col = 1; $col <= 100; $col++){
				$res = $col * $rows;
				echo "<td >$res</td>";
			};
			echo "</tr>";
		};
		echo "</table>
			</body>
			</html>
			";
?>