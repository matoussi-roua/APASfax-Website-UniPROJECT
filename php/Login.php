<?php 

session_start();

	include("connection.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user = $_POST['user'];
		$password = $_POST['password'];

		if(!empty($user) && !empty($password) )
		{

			//read from database
			$query = "select * from log_sign where NAME = '$user' or EMAIL='$user' ";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['PASSWORD'] === $password)
					{

						/*$_SESSION['user_id'] = $user_data['ID'];*/
						header("Location: ../AIDEZ NOUS/AidezNous.html");
						die;
					}
				}
			}
			
			$alertMessage = "incorrect password/user";
		}else
		{
			
            $alertMessage = "enter user/password";
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