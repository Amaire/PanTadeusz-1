<?php


include_once('parameters.php');

// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Check connection
	if (!$conn) {
	    die('<div class="alert alert-danger" role="alert">Connection failed: '.mysqli_connect_error().'</div>');
	}
	echo '<div class="alert alert-success" role="alert">Connected successfully</div>';

//pobranie wartości z formularza
	$title=$_POST['title'];
	$reflection=$_POST['reflection'];

	echo $title;
	echo $reflection;

//przesłanie refleksji do bazy danych
	$query=("INSERT INTO refpt (title, reflection) VALUES ('$title', '$reflection');");
	$result=mysqli_query($conn,$query);

	echo $title;
	echo $reflection;
	echo $query;

	header("Location: ./index.php?co=refleksja");