<?php 
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name= $_POST['name'];
		$animal = $_POST['animal'];
        $email = $_POST['email'];
        $message = $_POST['message'];
			
		$query = "insert into adopter (NAME,EMAIL,CHOICE,MESSAGE) values ('$name','$animal','$email','$message')";

		mysqli_query($conn, $query);

		header("Location: ../AIDEZ NOUS/AidezNous.html");
		die;	
	}
?>