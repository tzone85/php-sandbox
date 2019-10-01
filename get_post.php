<?php

	if (isset($_GET['name'])) {
		$name = htmlentities($_GET['name']);
		echo $name;
		//print_r($_GET);
	}
/*
	if (isset($_POST['name'])) {
		$name = htmlentities($_POST['name']);
//		echo $name;
		print_r($_POST);
	}


	if (isset($_REQUEST['name'])) {
		$name = htmlentities($_REQUEST['name']);
//		echo $name;
		print_r($_REQUEST);
	}
*/

//	echo $_SERVER['QUERY_STRING'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>

	<form action="get_post.php" method="GET">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name">
		</div>
		<div>
			<label for="email">Email</label>
			<input type="text" name="email">
		</div>
		<input type="submit" value="Submit">
	</form>

	<ul>
		<li><a href="get_post.php?name=Thando">Thando</a></li>
		<li><a href="get_post.php?name=Mncedi">Mncedi</a></li>
	</ul>

	<h1><?php echo "{$name}'s Profile"; ?></h1>

</body>
</html>