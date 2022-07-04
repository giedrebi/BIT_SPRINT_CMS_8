<?php
require('../config.php');

if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$title = mysqli_real_escape_string($conn, $title);
	$content = mysqli_real_escape_string($conn, $content);
	mysqli_query($conn, "INSERT INTO pages (title, content) VALUES ('$title','$content')") or die(mysqli_connect_error());
	$_SESSION['success'] = 'Page Added Successfully!';
	header('Location: ' . DIRADMIN);
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo SITETITLE; ?></title>
	<link rel="stylesheet" href="../style/navbar.css" />
	<link rel="stylesheet" href="../style/footer.css" />
	<link rel="stylesheet" href="../style/style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

	<?php include('../includes/navbar.php'); ?>

	<h2 id='title'>Add Page</h2>
	<div id="content">
		<form action="" method="post">
			<label for="title">Page title:</label> </br>
			<input name="title" type="text" value="" size="30" /></br></br>
			<label for="content">Content:</label></br>
			<textarea name="content" cols="160" rows="14"></textarea></br>
			<button type="submit" name="submit">Submit</button>
		</form>
	</div>

	<?php include('../includes/footer.php'); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>