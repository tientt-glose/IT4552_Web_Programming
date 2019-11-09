<?php
include('./server/session.php');
if(!isset($_SESSION['login_user'])){
  // echo $_SESSION['login_user'];
	header("location: index.php"); // Redirecting To Home Page
}

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'lab');

// TODO: make a confirmation alert for confirming whether user want to delete or not

// REGISTER USER
if (isset($_GET['id'])) {
  $id = $_GET['id'];
	$query = "DELETE FROM `user` WHERE id=$id";
	mysqli_query($db, $query);
	header('location: ../list.php');
}

?>