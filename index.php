<?php
	require_once('app/init.php');
?>

<html>
	<head>
		<title>Search Engine</title>

		<!-- <link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/style.css" rel="stylesheet"/>
		<link rel="icon" href="img/logo.png" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/jquery.redirect.js"></script> -->

		<meta name="viewport" content="width=device-width, initial-scale= 1">	
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="English">
		<meta name="author" content="Aditya Suman">	
	</head>
<body>
	<form method="get" autocomplete="off" action="index.php">
		<label>
			Search
			<input type="text" name="q" />
		</label>
		
		<input type="submit" value="Search" />	
	</form>
</body>
</html>