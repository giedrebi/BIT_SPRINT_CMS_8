<?php
require('../config.php');

if (!isset($_GET['id']) || $_GET['id'] == '') {
	header('Location: ' . DIRADMIN);
}

if (isset($_POST['submit'])) {
	$title = $_POST['title'];
	$content = $_POST['content'];
	$pageID = $_POST['ID'];

	$title = mysqli_real_escape_string($conn, $title);
	$content = mysqli_real_escape_string($conn, $content);

	mysqli_query($conn, "UPDATE pages SET title='$title', content='$content' WHERE ID='$pageID'");
	$_SESSION['success'] = 'Page Updated Successfully!';
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

	<h2 id='title'>Edit Page</h2>
	<?php
	$id = $_GET['id'];
	$id = mysqli_real_escape_string($conn, $id);
	$query = mysqli_query($conn, "SELECT * FROM pages WHERE ID='$id'");
	$row = mysqli_fetch_object($query);
	?>

	<div id="content">
		<form action="" method="post">
			<input type="hidden" name="ID" value="<?php echo $row->ID; ?>" />
			<label for="title">Page title:</label> </br>
			<input name="title" type="text" value="<?php echo $row->title; ?>" size="30" /></br></br>
			<label for="content">Content:</label></br>
			<textarea name="content" cols="160" rows="14"><?php echo $row->content; ?></textarea></br>
			<button type="submit" name="submit">Submit</button>
		</form>
	</div>

	<?php include('../includes/footer.php'); ?>
	</div><!-- close wrapper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>