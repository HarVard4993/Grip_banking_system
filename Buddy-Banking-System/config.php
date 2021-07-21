<?php

	$conn = mysqli_connect('localhost','root','9293','one');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>