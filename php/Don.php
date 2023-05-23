<?php 
session_start();

    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$price= $_POST['money'];
		
        
        $CN_1 = (int)$_POST['cardNumber1'];
        $CN_2 = (int)$_POST['cardNumber2'];
        $CN_3 = (int)$_POST['cardNumber3'];
        $CN_4 = (int)$_POST['cardNumber4'];

        $cardNumber = $CN_1 * 1000000000000 + $CN_2 * 1000000000 + $CN_3 * 1000000 + $CN_4;
        $cholder = $_POST['name'];
        
        $month = $_POST['month'];
        $year = $_POST['year'];

    
        $EXPDATE = $month . '-' . $year;

        $CVV = $_POST['cvc-cvv'];

        
        $query = "insert into don (PRICE,CardNumber,CHOLDER,EXPDATE,CVV) values ('$price','$cardNumber','$cholder','$EXPDATE','$CVV')";

        mysqli_query($conn, $query);

        header("Location: ../AIDEZ NOUS/AidezNous.html");
        die;	
	}
?>