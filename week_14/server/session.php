<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$db = mysqli_connect("localhost", "root", "", "lab");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT email from user where email = '$user_check'";
$ses_sql = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($ses_sql);
if ($row!=null) $login_session = $row['email'];
else $login_session = $_SESSION['login_user'];
?>