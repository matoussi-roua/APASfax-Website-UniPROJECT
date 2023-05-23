<?php 
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$username= $_POST['username'];
		$password = $_POST['password'];
        $MAIL = $_POST['MAIL'];
		$confirm = $_POST['passwordconfirm'];

		
		if ($password == $confirm) {
            
			
			$query = "insert into log_sign (NAME,EMAIL,PASSWORD) values ('$username','$MAIL','$password')";

			mysqli_query($conn, $query);

			

			header("Location: ../LOGIN/Login.html");
			die;
        } else {
            
            $alertMessage = "Passwords do not match! REPEAT";
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