<?php 
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name= $_POST['name'];
		
        $phone = $_POST['phone'];
        $objet = $_POST['objet'];
        
        $email = $_POST['email'];
        $remarques = $_POST['remarques'];

			
		$query = "insert into contact (NAME,EMAIL,TEL,OBJECT,REMARQUE) values ('$name','$email','$phone','$objet','$remarques')";

		mysqli_query($conn, $query);

		header("Location: ../ACCUEIL/Accueil.html");
		die;	
	}
?>