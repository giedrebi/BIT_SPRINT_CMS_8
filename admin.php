<?php
	
	function login($conn, $user, $pass){
		$user = strip_tags(mysqli_real_escape_string($conn, $user));
		$pass = strip_tags(mysqli_real_escape_string($conn, $pass));
		$pass = md5($pass);
		$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
		$result = mysqli_query($conn, $sql) or die ('Query failed. ' . mysqli_connect_error());
			
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['authorized'] = true;
			header('Location: '.DIRADMIN.'index.php');
			exit();
		} else {
			$_SESSION['error'] = '<p style="color:red;">Sorry, wrong username or password. Please try again!</p>';
		}
	}

	function logged_in() {
		if(isset($_SESSION['authorized']) and $_SESSION['authorized'] == true) {
			return true;
		} else {
			return false;
		}	
	}

	function login_required() {
		if(logged_in()) {	
			return true;
		} else {
			header('Location: '.DIRADMIN.'loginpage.php');
			exit();
		}	
	}

	function logout(){
		unset($_SESSION['authorized']);
		header('Location: ' . DIRADMIN . 'loginpage.php');
		exit();
	}

	function messages() {
		$message = '';
		if(isset($_SESSION['success']) and $_SESSION['success'] != '') {
			$message = '<div class="success">'.$_SESSION['success'].'</div>';
			$_SESSION['success'] = '';
		}
		if(isset($_SESSION['error']) and $_SESSION['error'] != '') {
			$message = '<div class="error">'.$_SESSION['error'].'</div>';
			$_SESSION['error'] = '';
		}
		echo "$message";
	}

	function errors($error){
		if (!empty($error)){
			$i = 0;
			while ($i < count($error)){
			$showError = "<div class='error'>".$error[$i]."</div>";
			$i ++;}
			echo $showError;
		}
	}
?>