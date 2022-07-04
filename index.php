<?php require('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo SITETITLE; ?></title>
	<link rel="stylesheet" href="style/navbar.css" />
	<link rel="stylesheet" href="style/footer.css" />
	<link rel="stylesheet" href="style/style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
	<!-- NAVBAR -->
	<div class="navbar navbar-expand-lg">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo DIR; ?>">
					<img id="logo" src="assets/logo.png" alt="logo"> </a>
			</li>
			<li class="nav-item"><a class="nav-link" href="<?php echo DIR; ?>">Home</a></li>
			<?php
			$sql = mysqli_query($conn, "SELECT * FROM pages WHERE isRoot='1' ORDER BY ID");
			while ($row = mysqli_fetch_object($sql)) {
				echo "<li class='nav-item'><a class='nav-link' href=\"" . DIR . "?p=$row->ID\">$row->title</a></li>";
			}
			?>
		</ul>
	</div>
	<!-- END NAVBAR -->

	<!-- PAGES AND CONTENT -->
	<?php
	if (!isset($_GET['p'])) {
		$query = mysqli_query($conn, "SELECT * FROM pages WHERE ID='1'");
	} else {
		$id = $_GET['p'];
		$id = mysqli_real_escape_string($conn, $id);
		$query = mysqli_query($conn, "SELECT * FROM pages WHERE ID='$id'");
	}
	$row = mysqli_fetch_object($query);
	echo "<h2 id='title'>$row->title</h2>";
	echo "<div id='content' style='width:60%;'>$row->content</div>";
	?>
	<!-- END PAGES AND CONTENT -->

	<?php include('includes/footer.php'); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>