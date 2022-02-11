<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
	  
		$message=$_POST['message'];

		$to='info@densiflora.com'; // Receiver Email ID, Replace with your email ID
		$subject='Densiflora online Shop';
		$message="Name :".$name."\n"."Phone :".$contact."\n".$msg ."/n".$email;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>