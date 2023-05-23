<?php 
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name= $_POST['name'];
		$phone = $_POST['phone'];
        $availability = $_POST['availability'];
        $skills = $_POST['skills'];
        $interests = $_POST['interests'];
        $email = $_POST['email'];
        $message = $_POST['message'];


        $query = "insert into benevole (NAME,EMAIL,PHONE,AVAILABILITY,SKILLS,INTERESTS,MESSAGE) values ('$name','$email','$phone','$availability','$skills','$interests','$message')";

        mysqli_query($conn, $query);

        header("Location: ../AIDEZ NOUS/AidezNous.html");
        die;	
	}
?>