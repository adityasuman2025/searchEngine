<html>
	<head>
		<title>Add | Search Engine</title>

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
	<form method="post" autocomplete="off" action="add.php">
		<label>
			Title
			<input type="text" name="title" />
		</label>
		<br/><br/>
		<label>
			Body
			<textarea name="body" rows="8"></textarea>
		</label>
		<br/><br/>
		<label>
			Keywords
			<input type="text" name="Kkeywords" placeholder="comma, seperated" />
		</label>
		<br/><br/>
		<input type="submit" value="Add" />
	</form>
</body>
</html>