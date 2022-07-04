<?php require_once('../config.php');
require_once('../admin.php');
if (logged_in()) {
	header('Location: ' . DIRADMIN);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title><?php echo SITETITLE; ?></title>
	<link rel="stylesheet" href="../style/footer.css" />
	<link rel="stylesheet" href="../style/login.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
	<div class="content">
		<?php
		if (isset($_POST['submit'])) {
			login($conn, $_POST['username'], $_POST['password']);
		}
		?>
		<div id="login">
			<p><?php echo messages(); ?></p>
			<form method="post" action="">
				<label>Username</label>
				<input type="text" name="username" /></br>
				<label>Password</label>
				<input type="password" name="password"/></br>
				<button type="submit" name="submit" value="Login" >Login</button>
			</form>
		</div>
	</div>
	<div class="clear"></div>
	<?php include('../includes/footer.php'); ?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>