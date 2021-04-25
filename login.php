

<?php


	session_start();

	$username = "sc321";
	$password = "sakib";

	if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {

	header("Location: addentry.html");
	}

	if (isset($_POST['username']) && isset($_POST['password'])){
	if ($_POST['username'] == $username && $_POST['password'] ==$password)

	{
	$_SESSION['logged_in'] = true;
	header("Location: addentry.html");
	}


}
?>