<?php 
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
        $email = $_POST['email'];

		try{
		$query = "insert into newsletter(email) values ('$email')";

		mysqli_query($conn, $query);
		header("Location: ../ACCUEIL/Accueil.html");
		die;
	}
		catch(Exception $e){
			$alertMessage = "already exist";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP Alert</title>
</head>
<body>
    
    <?php if (isset($alertMessage)): ?>
        <script>
            alert("<?php echo $alertMessage; ?>");
            history.back();
        </script>
        
    <?php endif; ?>
</body>
</html>