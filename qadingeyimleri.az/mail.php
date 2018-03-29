<?php

if(empty($_POST['ad']) || empty($_POST['elaqe']) || empty($_POST['mesaj'])){
	echo "bosdur";
}else{
	$ip = $_SERVER['REMOTE_ADDR'];

	$ad = $_POST['ad'];
	$elaqe = $_POST['elaqe'];
	$mesaj = $_POST['mesaj'];

	$to = 'orhandwk@code.edu.az,info@qadingeyimleri.az';

	$email_subject = "qadingeyimleri.az'a müraciət edən:  $ad";
	$email_body = "Məlumatlar:\n\nAd: $ad\n\nƏlaqə Vasitəsi: $elaqe\n\nIP: $ip\n\nMüraciətin məzmunu:\n$mesaj";
	$headers = "From: info@qadingeyimleri.az\n";

	$send = mail($to,$email_subject,$email_body,$headers);

	echo "ok";
}
?>