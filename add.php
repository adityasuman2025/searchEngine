<?php
	require_once('app/init.php');

//adding content to elastic search db on form post request
	if( !empty($_POST) ) {
		if( isset( $_POST[ 'title' ] ) && isset( $_POST[ 'body' ] ) && isset( $_POST[ 'keywords' ] ) ) {
			$title = $_POST[ 'title' ];
			$body = $_POST[ 'body' ];
			$keywords = explode( ",", $_POST[ 'keywords' ] );

		//sending post rqst to elastic search server to insert the form data 
			$indexed = $client->index([
				'index' => 'articles',
				'type' => 'article',
				'body' => [
					'title' => $title,
					'body' => $body,
					'keywords' => $keywords
				]
			]);

			if( $indexed ) {
				print_r( $indexed );
			} else {
				echo "failed to insert form data in elastic search server db";
			}
		}
	}
?>

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
			<input type="text" name="keywords" placeholder="comma, seperated" />
		</label>
		<br/><br/>
		<input type="submit" value="Add" />
	</form>
</body>
</html>