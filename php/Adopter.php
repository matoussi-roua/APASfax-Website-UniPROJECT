<?php 
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name= $_POST['name'];
		$animal = $_POST['animal'];
        $email = $_POST['email'];
        $message = $_POST['message'];
			
		$query = "insert into adopter (NAME,EMAIL,CHOICE,MESSAGE) values ('$name','$email','$animal','$message')";

		mysqli_query($conn, $query);

		header("Content-type: text/html");
		header("Refresh: 0; URL='javascript:window.close();'");
		echo "<script>window.close();</script>";
		die;	
	}
?>