<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
	// echo $_SESSION['login_user'];
	header("location: index.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Login</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	    <script src="https://ajax.googleapis.com/aja+++x/libs/jquery/3.4.1/jquery.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>


	<body>
		<div class="text-center">
			<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
			<div>
				<b id="logout"><a href="logout.php">Log Out</a></b>
				<b id="list"><a href="list.php">List & Edit</a></b>
			</div>
		</div>
	</body>
</html>