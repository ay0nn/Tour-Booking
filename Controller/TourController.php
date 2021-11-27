<?php
	require_once 'Model/dbconnect.php';
	$user_name="";
	$err_user_name="";
	$user_phn="";
	$err_user_phn="";
	$user_mail="";
	$err_user_mail="";
	$user_address="";
	$err_user_address="";
	$tour_date="";
	$err_tour_date="";
	$destination="";
	$err_destination="";
	$hasError=false;
	if(isset($_POST["book_tour"])){
		if(empty($_POST["user_name"])){
			$err_user_name = "Name required";
		}
		else
		{
			$user_name = $_POST["user_name"];
		}
		if(empty($_POST["user_phn"])){
			$err_user_phn = "Phone no required";
		}
		else
		{
			$user_phn = $_POST["user_phn"];
		}
		if(empty($_POST["user_mail"])){
			$err_user_mail = "Email required";
		}
		else
		{
			$user_mail = $_POST["user_mail"];
		}
		if(empty($_POST["user_address"])){
			$err_user_address = "Address required";
		}
		else
		{
			$user_address = $_POST["user_address"];
		}
		if(empty($_POST["tour_date"])){
			$err_tour_date = "Travelling date required";
		}
		else
		{
			$tour_date = $_POST["tour_date"];
		}
		if(empty($_POST["destination"])){
			$err_destination = "Destination required";
		}
		else
		{
			$destination = $_POST["destination"];
		}
		
		if(isset($_POST["book_tour"])){
		if(!$hasError){
			inserttourboking($_POST["user_name"],$_POST["user_phn"],$_POST["user_mail"],$_POST["user_address"],$_POST["tour_date"],$_POST["destination"]);
			header("Location: AnandoBromon.php");
			echo "Thanks for your Booking!";
			
		}
	}
	}
	function inserttourboking($user_name,$user_phone,$user_mail,$user_address,$tour_date,$destination){
	
		$query = "INSERT INTO tourbooking VALUES(Null,'$user_name','$user_phone','$user_mail','$user_address','$tour_date','$destination')";
		execute($query);		
	}
	
?>