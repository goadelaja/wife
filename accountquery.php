<?php
require_once("inc/connect.php");


		$material = mysqli_real_escape_string($conn, $_POST['material']);
		$transactionDate = mysqli_real_escape_string($conn, $_POST['transactionDate']);
		$customerName = mysqli_real_escape_string($conn, $_POST['customerName']);
    $quantityPurchased = mysqli_real_escape_string($conn, $_POST['quantityPurchased']);
    $amountPaid = mysqli_real_escape_string($conn, $_POST['amountPaid']);
    $amountOwed = mysqli_real_escape_string($conn, $_POST['amountOwed']);



$sql = "INSERT INTO transact (material, transactionDate, customerName, quantityPurchased, amountPaid, amountOwed)
		 VALUES ('$material', '$transactionDate', '$customerName', '$quantityPurchased', '$amountPaid', '$amountOwed');";

$res = mysqli_query($conn, $sql);

if(!$res){
	die("Fill in the correct information and try again" . mysqli_error($conn));
}else{
	echo "correct";
}
