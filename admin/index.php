<?php
require('../config.php');

login_required();

if (isset($_GET['logout'])) {
	logout();
}

if (isset($_GET['delpage'])) {
	$delpage = $_GET['delpage'];
	$delpage = mysqli_real_escape_string($conn, $delpage);
	$sql = mysqli_query($conn, "DELETE FROM pages WHERE ID = '$delpage'");
	$_SESSION['success'] = "Page Deleted Successfully";
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
	<script language="JavaScript" type="text/javascript">
		function delpage(id, title) {
			if (confirm("Are you sure you want to delete '" + title + "' page?")) {
				window.location.href = '<?php echo DIRADMIN; ?>?delpage=' + id;
			}
		}
	</script>
</head>

<body>

	<?php include('../includes/navbar.php'); ?>

		<!-- TABLE TO MANAGE PAGES -->
		<?php
		messages();
		?>
		<h2 id='title'>Manage Pages</h2>
		<table>
			<tr>
				<th>Page</th>
				<th>Action</th>
			</tr>

			<?php
			$sql = mysqli_query($conn, "SELECT * FROM pages ORDER BY ID");
			while ($row = mysqli_fetch_object($sql)) {
				echo "<tr>";
				echo "<td>$row->title</td>";
				if ($row->ID == 1) {
					echo "<td><button><a href=\"" . DIRADMIN . "editpage.php?id=$row->ID\">Edit</a></button></td>";
				} else {
					echo "<td><button><a href=\"" . DIRADMIN . "editpage.php?id=$row->ID\">Edit</a></button> <button><a href=\"javascript:delpage('$row->ID','$row->title');\">Delete</a></button></td>";
				}

				echo "</tr>";
			}
			?>
		</table>
		<!-- END TABLE -->

		<button><a href="<?php echo DIRADMIN; ?>addpage.php" class="button">Add Page</a></button>

	<?php include('../includes/footer.php'); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>