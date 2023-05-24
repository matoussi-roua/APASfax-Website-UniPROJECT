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

        header("Content-type: text/html");
		header("Refresh: 0; URL='javascript:window.close();'");
		echo "<script>window.close();</script>";
        die;	
	}
?>